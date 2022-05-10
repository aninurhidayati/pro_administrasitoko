<!DOCTYPE html>
<?php
require_once('../config/koneksi_db.php') ;
require_once('../config/config.php') ;
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../asset/loginpage.css" />
  </head>
  <div class="login-box">
    <img src="" class="avatar">
    <h1>login here</h1>
    <form action="ceklogin.php" method="POST">
      <p>Username </p>
      <input type="text" name="username" placeholder="Enter Username">
      <p>Password</p>
      <input type="password" name="password" placeholder="Enter Password">
      <input type="submit" name="btnlogin" value="login">
      <a href="#"> Home</a>
    </form>
  </div>
    <!-- modal untuk tampilkan loading -->
    <script src="asset/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="asset/javascript/main.js" type="text/javascript"></script>
  </body>
</html>
