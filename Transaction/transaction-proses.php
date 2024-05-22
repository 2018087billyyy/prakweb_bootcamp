<?php
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $category = $_POST['category'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO tb_transaction (nama, course, harga) VALUES ('$nama', '$category', '$harga')";

    if(empty($nama) || empty($category) || empty($harga)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'entry-data-transaction.php';
            </script>
        ";
    } elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data transaction Berhasil Ditambahkan');
                window.location = 'admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'entry-data-transaction.php';
            </script>
        ";
    }
} elseif(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $category = $_POST['category'];
    $harga = $_POST['harga'];

    $sql = "UPDATE tb_transaction SET 
            nama = '$nama',
            course = '$category',
            harga = '$harga'
            WHERE id = $id";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Transaction Berhasil Diubah');
                window.location = 'admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'entry-data-transaction.php';
            </script>
        ";
    }
} elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM tb_transaction WHERE id = $id";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Transaction Berhasil Dihapus');
                window.location = 'admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Transaction Gagal Dihapus');
                window.location = 'admin.php';
            </script>
        ";
    }
}
?>
