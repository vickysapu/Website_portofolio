<?php
session_start();

// Mengimpor koneksi ke database
include "koneksi.php";

// Fungsi untuk menghindari XSS
function sanitize_input($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

// Verifikasi jika metode request adalah POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validasi input
    if (empty($_POST['nama_pengirim']) || empty($_POST['email_pengirim']) || empty($_POST['pesan'])) {
        die("Semua field harus diisi.");
    }

    // Sanitasi data
    $nama_pengirim = sanitize_input($_POST['nama_pengirim']);
    $email_pengirim = sanitize_input($_POST['email_pengirim']);
    $pesan = sanitize_input($_POST['pesan']);
    $tgl = date("Y-m-d H:i:s");

    // Menghindari SQL Injection dengan prepared statements
    $query = "INSERT INTO `pesan` (`nama_pengirim`, `email_pengirim`, `pesan`, `waktu_terkirim`) VALUES (?, ?, ?, ?)";
    $stmt = $kon->prepare($query);

    if (!$stmt) {
        die("Preparation failed: " . $kon->error);
    }

    $stmt->bind_param("ssss", $nama_pengirim, $email_pengirim, $pesan, $tgl);

    // Eksekusi statement dan cek hasil
    if ($stmt->execute()) {
        // Redirect setelah berhasil dengan parameter URL untuk feedback
        header("Location: ../index.php?success=true");
        exit();
    } else {
        // Tampilkan error (pastikan untuk tidak menampilkan informasi sensitif di produksi)
        error_log("Database error: " . $stmt->error);
        echo "Terjadi kesalahan pada pengolahan data. Silakan coba lagi.";
    }
} else {
    echo "Metode permintaan tidak valid.";
}
?>
