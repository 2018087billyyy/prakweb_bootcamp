<?php 
include 'koneksi.php';

if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $nomortelepon = $_POST['nomortelepon'];
    $password = $_POST['password'];

    if(empty($nomortelepon) || empty($username) || empty($password)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'register.php';
            </script>
        ";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO tb_admin (nomortelepon, password, username) VALUES ('$nomortelepon', '$hashed_password', '$username')";

        if(mysqli_query($koneksi, $sql)) {
            echo "  
                <script>
                    alert('Registrasi Berhasil Silahkan login');
                    window.location = 'login.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Terjadi Kesalahan');
                    window.location = 'register.php';
                </script>
            ";
        }
    }
}
?>
