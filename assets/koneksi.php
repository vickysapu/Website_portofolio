<?php
    $kon = new mysqli('localhost', 'root', '', 'postofolio');

    if ($kon->connect_error) {
        die("Connection failed: " . $kon->connect_error);
    }
?>