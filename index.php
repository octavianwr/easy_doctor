<?php
  include 'connect.php';
  //require 'header.php';
  if($_SESSION['id_patient']!="nouser"){ //ini masih status global, belum dipisah antara pasien dan admin
?>
<script language="javascript">alert("Anda telah sign in");</script>
<script>document.location.href='patient/index.php';</script>
  <?php }

if($_SESSION['id_hospital']!="nouser"){ //ini masih status global, belum dipisah antara pasien dan admin
?>
<script language="javascript">alert("Anda telah sign in");</script>
<script>document.location.href='adminrs/index.php';</script>
<?php }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HALAMAN UTAMA</title>
  </head>
  <body>
    Belum daftar? Klik <a href="signup.php"> disini </a>
    <br>
    kalo mau sign in <a href="signin.php"> disini </a>
  </body>
</html>
