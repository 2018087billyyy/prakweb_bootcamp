<?php
session_start();
session_unset();
session_destroy();  // Menghancurkan semua session

if (isset($_COOKIE['username'])) {
    setcookie('username', '', time() - 3600, '/'); // Menghapus cookie
}

header("Location: login.php");
exit();
?>
