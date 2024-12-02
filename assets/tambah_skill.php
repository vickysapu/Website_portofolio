<?php
session_start();

include "koneksi.php";

if (!$kon) {
    die("Database connection failed: " . $kon->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $upload_dir = "gambar_skill/";

    $nama_skill = $_POST['nama_skill'];
    $progres = $_POST['progres'];

    $file_name = $_FILES['gambar_skill']['name']; 
    $file_tmp = $_FILES['gambar_skill']['tmp_name']; 
    $file_error = $_FILES['gambar_skill']['error']; 

    if ($file_error === UPLOAD_ERR_OK) {
        $unique_file_name = uniqid() . '_' . $file_name;
        $upload_path = $upload_dir . $unique_file_name;

        if (move_uploaded_file($file_tmp, $upload_path)) {
            $query = "INSERT INTO `skill` (`gambar_skill`, `nama_skill`, `progres`) VALUES (?, ?, ?)";
            $stmt = $kon->prepare($query);

            if (!$stmt) {
                die("Preparation failed: " . $kon->error);
            }

            $stmt->bind_param("ssi", $unique_file_name, $nama_skill, $progres);

            if ($stmt->execute()) {
                header("Location: ../auth/dataGlobal.php?success=true");
                exit();
            } else {
                echo "Database error: " . $stmt->error;
            }
        } else {
            echo "Failed to upload file.";
        }
    } else {
        echo "Error uploading file.";
    }
} else {
    echo "Invalid request method.";
}
?>
