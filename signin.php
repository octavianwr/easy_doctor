<<<<<<< HEAD
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
=======
<?php
  require_once 'connect.php';
  error_reporting(E_PARSE);
  if($_SESSION['id_patient']!="nouser"){ //ini masih status global, belum dipisah antara pasien dan admin
?>
<script>document.location.href='patient/index.php';</script>
  <?php }

if($_SESSION['id_hospital']!="nouser"){ //ini masih status global, belum dipisah antara pasien dan admin
?>
<script>document.location.href='adminrs/index.php';</script>
<?php }

if(($_SESSION['id_patient'] =="nouser") AND ($_SESSION['id_hospital'] == "nouser")){
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
<?php } ?>
>>>>>>> 18193ef419f7273bd0049fb1b6d165a536e8376a
