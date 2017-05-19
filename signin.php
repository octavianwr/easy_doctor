<?php
  require_once 'connect.php';
    if($_SESSION['id_hospital']!="nouser" OR $_SESSION['id_patient'] != "nouser"){
 ?>
 <script language="javascript">alert("Anda sudah login");</script>
 <script>document.location.href='index.php';</script>
   <?php }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>sign in</title>
  </head>
  <body>
    SIGN IN SEBAGAI:
    <form class="" action="adminrs/signin.php" method="post">
      <br><button class="btn waves-effect waves-teal" type="submit" value="submit" a href="adminrs/signin.php">Admin</button>
    </form>
    <form class="" action="patient/signin.php" method="post">
      <br><button class="btn waves-effect waves-teal" type="submit" value="submit" a href='patient/signin.php'>Pasien</button>
    </form>
      </body>
</html>
