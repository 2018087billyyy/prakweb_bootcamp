<?php
session_start();
if(!isset($_SESSION['username'])) {
    header('location: login.php');
    exit;
}

include '../koneksi.php';

// Pastikan Anda mendapatkan id dari URL
$id = $_GET['id']; // Contoh: ?id=1

// Ambil data transaksi berdasarkan id
$sql = "SELECT * FROM tb_transaction WHERE id = $id";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=\, initial-scale=1.0" />
    <title>Hapus Transaction</title>
    <link rel="stylesheet" href="../Style/admin.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
<nav>
    <!-- (Your existing nav content) -->
</nav>

<div class="container">
    <h2>Admin</h2>
    <div class="nav-main">
        <a href="./category.php">
            <p>Category</p>
        </a>
        <a href="./admin.php">
            <p class="active">Transaction</p>
        </a>
    </div>

    <div class="home-content">
        <h3>Hapus Data Transaction</h3>
        <div class="form-login">
            <h4>Ingin Menghapus Data ?</h4>
            <form action="transaction-proses.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <button type="submit" class="btn" name="hapus" style="margin-top: 50px;">Yes</button>
                <button type="button" class="btn" onclick="window.location.href='admin.php'">No</button>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function Delete() {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success",
                });
            }
        });
    }

    let burger = document.getElementById("burger");
    let dropdown = document.getElementById("dropdown");
    burger.addEventListener("click", function() {
        dropdown.classList.toggle("tampil");
    });
</script>
</body>
</html>
