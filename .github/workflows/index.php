<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if(isset($_SESSION['username'])){ // Jika session username ada berarti dia sudah login
  header("location: home.php"); // Kita Redirect ke halaman home.php
}
?>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="style.css"/>
</head>
<body>
  <div style="color: red;margin-bottom: 15px;">
    <?php
    // Cek apakah terdapat cookie dengan nama message
    if(isset($_COOKIE["message"])){ // Jika ada
      echo $_COOKIE["message"]; // Tampilkan pesannya
    }
    ?>
  </div>
  <div class="container">
  <br>
       <form method="post" action="login.php">
   <h2>Hait Coffee</h2><br>
 
   <label>Username :</label>
   <input id="name" name="username" placeholder="username" type="text">
 
   <label>Password :</label>
   <input id="password" name="password" placeholder="**********" type="password">
 
   <center><input type="submit" name="submit" id="submit" value="Login"></center>
    </form>
   </div>
  </body>
</html>
