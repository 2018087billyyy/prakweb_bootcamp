<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../Style/admin.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <nav>
      <span class="logo">
        <img src="./assets/code.png" width="38px" />
        <p>Chocoding</p>
      </span>
      <ul>
        <a href=""><p>Program Choco</p></a>
        <a href=""><p>Location</p></a>
        <a href=""><p>About Us</p></a>
      </ul>
      <label class="burger" for="burger">
        <input type="checkbox" id="burger" />
        <span></span>
        <span></span>
        <span></span>
      </label>

      <a href="logout.php">
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

    <div class="container">
      <h2>Admin</h2>
      <div class="nav-main">
        <a href="./category.html"><p class="active">Category</p></a>
        <a href="admin.php"><p class="">Transaction</p></a>
      </div>

      <div class="card">
        <div class="card-header">
          <h3>Category</h3>
          <div class="card-btn">
            <a href="./entry-data-category.html"
              ><i class="fa-solid fa-plus fa-lg" style="margin-right: 7px"></i
              >Category Entry</a
            >
            <a href=""
              ><i
                class="fa-solid fa-table fa-lg"
                style="color: #ffffff; margin-right: 7px"
              ></i
              >View Tables</a
            >
          </div>
        </div>

        <table>
          <thead>
            <tr>
              <th>Nama</th>
              <th>Course</th>
              <th>Price</th>
              <th>Status</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td scope="row">Noval</td>
              <td>Front End Developer</td>
              <td>Rp 3.000.000</td>
              <td>Pending</td>
              <td>
                <div class="icon-table">
                  <i
                    class="fa-solid fa-lg fa-trash-can"
                    style="color: #d70909"
                    onclick="Delete()"
                  ></i>
                  <i
                    class="fa-regular fa-lg fa-pen-to-square"
                    style="color: #17dc09"
                  ></i>
                </div>
              </td>
            </tr>
            <tr>
              <td scope="row">Rizky</td>
              <td>Front End Developer</td>
              <td>Rp 3.000.000</td>
              <td>Pending</td>
              <td>
                <div class="icon-table">
                  <i
                    class="fa-solid fa-lg fa-trash-can"
                    style="color: #d70909"
                    onclick="Delete()"
                  ></i>
                  <i
                    class="fa-regular fa-lg fa-pen-to-square"
                    style="color: #17dc09"
                  ></i>
                </div>
              </td>
            </tr>
            <tr>
              <td scope="row">Niko</td>
              <td>Front End Developer</td>
              <td>Rp 3.000.000</td>
              <td>Pending</td>
              <td>
                <div class="icon-table">
                  <i
                    class="fa-solid fa-lg fa-trash-can"
                    style="color: #d70909"
                    onclick="Delete()"
                  ></i>
                  <i
                    class="fa-regular fa-lg fa-pen-to-square"
                    style="color: #17dc09"
                  ></i>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <script>
      let burger = document.getElementById("burger");
      let dropdown = document.getElementById("dropdown");
      burger.addEventListener("click", function () {
        dropdown.classList.toggle("tampil");
      });
    </script>
  </body>
</html>
