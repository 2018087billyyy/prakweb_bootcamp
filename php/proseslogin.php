<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']);

    // Misalkan ini adalah data login yang valid
    $valid_username = "admin";
    $valid_password = "12345";

    if ($username == $valid_username && $password == $valid_password) {
        $_SESSION['user'] = $username;
        
        if ($remember) {
            setcookie('username', $username, time() + (86400 * 30), "/"); // Set cookie selama 30 hari
        }

        header("Location: ../admin.php"); // Asumsikan welcome.php ada di root directory
        exit();
    } else {
        header("Location: ../pages/login.php?error=invalid");
        exit();
    }
}
?>
