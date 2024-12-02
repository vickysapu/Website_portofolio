<?php
session_start();

require_once 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars(trim($_POST['username'])); 
    $password = $_POST['password'];

    $query = "SELECT id, nama, password FROM user WHERE nama = ? AND password = ?";
    $stmt = $kon->prepare($query);

    if (!$stmt) {
        die("Query preparation failed: " . $kon->error);
    }

    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['nama'];  

        header("Location: ../auth/dashboard.php");
        exit();
    } else {
        header("Location: ../login.php?status=error");
    }
} else {
    echo "Invalid request.";
}

$kon->close();
?>
