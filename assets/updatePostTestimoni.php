<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id_testimoni = $_GET['id'];

    $stmt = $kon->prepare("SELECT ket_status FROM testimoni WHERE id_testimoni = ?");
    $stmt->bind_param("i", $id_testimoni);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($tampil = $result->fetch_assoc()) {
        $new_status = ($tampil['ket_status'] === 0) ? 1 : 0;

        $update_stmt = $kon->prepare("UPDATE testimoni SET ket_status = ? WHERE id_testimoni = ?");
        $update_stmt->bind_param("ii", $new_status, $id_testimoni);
        $ut = $update_stmt->execute();

        if ($ut) {
            header('Location: ../auth/dataGlobal.php');
            exit();
        } else {
            header('Location: ../auth/dataGlobal.php');
            exit();
        }
    } else {
        header('Location: ../auth/dataGlobal.php');
        exit();
    }
}
?>
