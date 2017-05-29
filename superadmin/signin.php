<?php
  include '../config.php';
  //require 'header.php';
  if($_SESSION['id_admin']!="nouser"){
?>
<script language="javascript">alert("Anda sudah login");</script>
<script>document.location.href='index.php';</script>
  <?php }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sign In Super Admin</title>
  </head>
  <body>
    <h1>Sign In Super Admin</h1>
    <form class="" action="signin_process.php" method="post">
      <br>Email<br>
      <input  type="email" name="email" id="email" required>
      <br>Password <br>
      <input type="password" name="pass" id="pass" min="6" required>
      <br><a href="../ubahpassword.php">Lupa Password?</a><br>
      <button class="btn waves-effect waves-teal" type="submit" value="submit" action='signin_process.php'>Sign In</button>
    </form>
  </body>
</html>
