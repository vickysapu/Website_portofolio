<?php
session_start();
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_project = $_POST['id_project'];
    $nama_projek = $_POST['nama_projek'];
    $member = $_POST['member'];
    $mentor = $_POST['mentor'];
    $besar_project = $_POST['besar_project'];
    $link_project = $_POST['link_project'];
    $keterangan = $_POST['keterangan'];

    $file_path = ""; // Inisialisasi file path

    // Direktori tempat file disimpan
    $uploadDir = "../assets/file_project/";

    // Cek apakah ada file baru yang diunggah
    if (!empty($_FILES['file']['name'])) {
        $fileName = $_FILES['file']['name'];
        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));
        $newFilePath = $uploadDir . $id_project . "." . $fileExtension;

        // Ambil file lama dari database
        $query = "SELECT file_project FROM project WHERE id_project = ?";
        $stmt = $kon->prepare($query);
        $stmt->bind_param("i", $id_project);
        $stmt->execute();
        $stmt->bind_result($oldFilePath);
        $stmt->fetch();
        $stmt->close();

        // Hapus file lama jika ada
        if ($oldFilePath && file_exists($uploadDir . $oldFilePath)) {
            unlink($uploadDir . $oldFilePath);
        }

        // Simpan file baru
        if (move_uploaded_file($fileTmpPath, $newFilePath)) {
            $file_path = $id_project . "." . $fileExtension;
        } else {
            die("Terjadi kesalahan saat mengunggah file.");
        }
    } else {
        // Jika tidak ada file baru, ambil file lama
        $query = "SELECT file_project FROM project WHERE id_project = ?";
        $stmt = $kon->prepare($query);
        $stmt->bind_param("i", $id_project);
        $stmt->execute();
        $stmt->bind_result($file_path);
        $stmt->fetch();
        $stmt->close();
    }

    // Update data di database
    $query = "UPDATE project SET nama_projek = ?, member = ?, mentor = ?, besar_project = ?, link_project = ?, keterangan = ?, file_project = ? WHERE id_project = ?";
    $stmt = $kon->prepare($query);
    $stmt->bind_param("sssssssi", $nama_projek, $member, $mentor, $besar_project, $link_project, $keterangan, $file_path, $id_project);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Project berhasil diperbarui.";
    } else {
        $_SESSION['message'] = "Error saat memperbarui project.";
    }

    $stmt->close();

    // Redirect sesuai status
    $status = $_GET['status'] ?? 'dashboard';
    header("Location: ../auth/" . ($status === 'dataProject' ? "dataProject.php" : "dashboard.php"));
    exit();
}
?>
