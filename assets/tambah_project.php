<?php
session_start();
include("koneksi.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Data form
    $file_project = $_FILES['file_project'];
    $nama_projek = $_POST['nama_project'];
    $member_project = $_POST['member_project'];
    $mentor_project = $_POST['mentor_project'];
    $besar_project = $_POST['besar_project'];
    $link_project = $_POST['link_project'];
    $keterangan = $_POST['keterangan'];
    $tanggal_input = date('Y-m-d');

    $upload_dir = "file_project/";
    $file_name = basename($file_project["name"]);
    $file_tmp = $file_project["tmp_name"];
    $file_size = $file_project["size"];

    if ($file_size > 0) {
        $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
        $new_file_name = uniqid() . "." . $file_extension;
        $file_path = $upload_dir . $new_file_name;

        if (move_uploaded_file($file_tmp, $file_path)) {
            $query = "INSERT INTO project (file_project, nama_projek, member, mentor, besar_project, link_project, keterangan, tanggal_input)
                      VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $kon->prepare($query);

            if ($stmt) {
                $stmt->bind_param("ssssssss", $new_file_name, $nama_projek, $member_project, $mentor_project, $besar_project, $link_project, $keterangan, $tanggal_input);

                if ($stmt->execute()) {
                    $status = $_GET['status'] ?? 'dashboard'; 
                    if ($status === 'dataProject') {
                        header("Location: ../auth/dataProject.php");
                    } else {
                        header("Location: ../auth/dashboard.php");
                    }
                    exit();
                } else {
                    echo "Error: " . $stmt->error;
                }

                $stmt->close();
            } else {
                echo "Error preparing statement: " . $kon->error;
            }
        } else {
            echo "Failed to upload file.";
        }
    } else {
        echo "No file uploaded or file size is 0.";
    }

    $kon->close();
}
?>
