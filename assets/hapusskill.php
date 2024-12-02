<?php
session_start();

include "koneksi.php";

if (isset($_GET['id_skill'])) {
    $id_skill = intval($_GET['id_skill']); // Pastikan ID adalah angka
    echo "ID yang diterima: $id_skill<br>";

    if ($id_skill > 0) {
        // Query hapus
        $query = "DELETE FROM `skill` WHERE `id_skill` = ?";
        $stmt = $kon->prepare($query);

        if ($stmt) {
            $stmt->bind_param("i", $id_skill);
            $result = $stmt->execute();

            if ($result) {
                header("Location: ../auth/dataGlobal.php?status=success");
                exit;
            } else {
                echo "Kesalahan saat menghapus data: " . $stmt->error . "<br>";
            }
            $stmt->close();
        } else {
            echo "Kesalahan pada query: " . $kon->error . "<br>";
        }
    } else {
        echo "ID tidak valid.<br>";
    }
} else {
    echo "ID skill tidak ditemukan.<br>";
}
?>
    