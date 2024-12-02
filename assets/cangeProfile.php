<?php
session_start();
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = filter_input(INPUT_POST, 'userId', FILTER_SANITIZE_STRING);
    $userName = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_STRING);
    $userPassword = filter_input(INPUT_POST, 'userPassword', FILTER_SANITIZE_STRING);

    $query = $kon->prepare("UPDATE `user` SET `nama` = ?, `password` = ? WHERE `uuid_user` = ?");
    $query->bind_param("sss", $userName, $userPassword, $userId);

    if ($query->execute()) {
        header('Location: ../auth/profile.php?status=success');
        exit;
    } else {
        header('Location: ../auth/profile.php?status=error');
        exit;
    }
}
