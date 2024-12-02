<?php
session_start();
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $upload_dir = "foto_test/";
    $nama = htmlspecialchars(trim($_POST['nama']));
    $pesan = htmlspecialchars(trim($_POST['pesan']));

    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $file_name = basename($_FILES['foto']['name']);
        $file_tmp = $_FILES['foto']['tmp_name'];
        $file_size = $_FILES['foto']['size'];
        $file_type = mime_content_type($file_tmp);
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];

        if (!in_array($file_type, $allowed_types)) {
            die("Invalid file type. Only JPEG, PNG, and GIF files are allowed.");
        }

        if ($file_size > 5 * 1024 * 1024) {
            die("File size exceeds the maximum limit of 5MB.");
        }

        $unique_file_name = uniqid() . '_' . $file_name;
        $upload_path = $upload_dir . $unique_file_name;

        if (move_uploaded_file($file_tmp, $upload_path)) {
            $query = "INSERT INTO `testimoni` (`foto`, `nama`, `pesan`) VALUES (?, ?, ?)";
            $stmt = $kon->prepare($query);

            if (!$stmt) {
                die("Preparation failed: " . $kon->error);
            }

            $stmt->bind_param("sss", $unique_file_name, $nama, $pesan);
        } else {
            die("Failed to upload file.");
        }
    } else {
        $query = "INSERT INTO `testimoni` (`foto`, `nama`, `pesan`) VALUES (NULL, ?, ?)";
        $stmt = $kon->prepare($query);

        if (!$stmt) {
            die("Preparation failed: " . $kon->error);
        }

        $stmt->bind_param("ss", $nama, $pesan);
    }

    if ($stmt->execute()) {
        header("Location: ../index.php");
        exit();
    } else {
        die("Database error: " . $stmt->error);
    }
} else {
    die("Invalid request method.");
}
?>
