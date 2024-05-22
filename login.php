

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="Style/login.css" />
  <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
</head>

<body>
  <div class="main">
    <div class="container">
      <h1>Login<span style="color: rgb(34, 127, 209)"> Chocoding</span></h1>
      <!-- Di dalam <body>, di atas <form> -->
      <?php if(isset($_GET['error']) && $_GET['error'] == 'invalid'): ?>
      <p style="color: red;">Invalid username or password. Please try again.</p>
      <?php endif; ?>
      
      <form action="proses-login.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required />
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required />
        <div>
          <input type="checkbox" name="remember" id="remember" />
          <label for="remember">Remember me</label>
        </div>
        <button type="submit" name="login">Login</button >
      </form>
    </div>
  </div>
</body>

</html>