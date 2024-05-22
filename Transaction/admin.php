<?php
session_start();
if(!isset($_SESSION['username'])) {
    header('location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=\, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="../Style/admin.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
  <nav>
    <span class="logo">
      <img src="../assets/code.png" width="38px" />
      <p>Chocoding</p>
    </span>
    <ul>
      <a href="">
        <p>Program Choco</p>
      </a>
      <a href="">
        <p>Location</p>
      </a>
      <a href="">
        <p>About Us</p>
      </a>
    </ul>
    <label class="burger" for="burger">
      <input type="checkbox" id="burger" />
      <span></span>
      <span></span>
      <span></span>
    </label>
    <a href="../logout.php">
    <div class="button">
      <span class="btn">
        <p>Logout</p>
      </span>
    </div>
    </a>
  </nav>




  <div class="dropdown" id="dropdown">
    <ul>
      <li>Program Choco</li>
      <li>Location</li>
      <li>About Us</li>
      <li>
        <div class="btn">
          <p>Masuk</p>
        </div>
      </li>
      <li>
        <div class="btn">
          <p>Daftar</p>
        </div>
      </li>
    </ul>
  </div>
  <?php
  ?>

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

    <div class="card">
      <div class="card-header">
        <h3>Transaction</h3>
        <div class="card-btn">
          <a href="./entry-data-Transaction.php"><i class="fa-solid fa-plus fa-lg" style="margin-right: 7px"></i>Transaction Entry</a>
          <a href=""><i class="fa-solid fa-table fa-lg" style="color: #ffffff; margin-right: 7px"></i>View Tables</a>
        </div>
      </div>

      <table>
        <thead>
          <tr>
            <th>Nama</th>
            <th>Course</th>
            <th>Price</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
					<?php
					include '../koneksi.php';
					$sql = "SELECT * FROM tb_transaction";
					$result = mysqli_query($koneksi, $sql);
					if (mysqli_num_rows($result) == 0) {
						echo "
						<tr>
						<td colspan='5' align='center'>
						Data Kosong
						</td>
			   </tr>
				";
					}
					while ($data = mysqli_fetch_assoc($result)) {
						echo "
                    <tr>
                      <td>$data[nama]</td>
                      <td>$data[course]</td>
                      <td>$data[harga]</td>
                      <td >
                        <a class='btn-edit' href=edit-Transaction.php?id=$data[id]>
                               Edit
                        </a> | 
                        <a class='btn-delete' href=hapus-transaction.php?id=$data[id]>
                            Hapus
                        </a>
                      </td>
                    </tr>
                  ";
					}
					?>
				</tbody>
      </table>
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
  <?php


// if (!isset($_SESSION['user'])) {
//   header("Location: login.php"); // Jika tidak ada session user, arahkan kembali ke login
//   exit();
// }
// echo "<a href='logout.php'>Logout</a>"; // Link untuk logout
// ?>
</body>

</html>