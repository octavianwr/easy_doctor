<?php
  include '../connect.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrasi Super Admin</title>
  </head>
  <body>
    <h4>Registrasi Super Admin</h4>
    <form class ="col s12" name="uploader" action="signup_process.php" method="POST" enctype="multipart/form-data">
      <br>email<br>
      <input  type="email" name="email" id="email" required>
      <br>password <br>
      <input type="password" name="pass" id="pass" min="6" required>
      <br><button class="btn waves-effect waves-teal" type="submit" >Submit</button>
    </form>
  </body>
</html>
