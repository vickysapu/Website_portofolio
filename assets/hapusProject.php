<?php
session_start();

include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id_project = $_GET['id'];

    $query = $kon->prepare("DELETE FROM `project` WHERE `id_project` = ?");
    $query->bind_param("i", $id_project); 

    if ($query->execute()) {
        $status = $_GET['status'] ?? 'dashboard';
        if ($status === 'dataProject') {
            header("Location: ../auth/dataProject.php");
        } else {
            header("Location: ../auth/dashboard.php");
        }
        exit();
    } else {
        $status = $_GET['status'] ?? 'dashboard';
        if ($status === 'dataProject') {
            header("Location: ../auth/dataProject.php");
        } else {
            header("Location: ../auth/dashboard.php");
        }
        exit();
    }
}
?>
