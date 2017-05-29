<?php
  include '../connect.php';
  //require 'header.php';
  if($_SESSION['id_admin']=="nouser"){
?>
<script language="javascript">alert("Anda belum login");</script>
<script>document.location.href='signin.php';</script>
  <?php }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>INDEX</title>
  </head>
  <body>
    Mau <a href="signout.php"> Sign Out</a> ? <br>
    ini halaman <b>admin pasien</b>
    <form class="" action="index.php" method="post">
      <button type="submit">HOME</button>
    </form>
    <br><form class="" action="admin_rs/signup.php" method="">
      <button type="submit">TAMBAH RUMAH SAKIT</button>
    </form>
    <br><form class="" action="search.php" method="post">
      <button type="submit">CARI DOKTER</button>
    </form>
    <br><form class="" action="../contactus.php" method="post">
      <button type="submit">HUBUNGI KAMI</button>
    </form>
    <br><form class="" action="signout.php" method="post">
      <button type="submit">SIGN OUT</button>
    </form>
  </body>
</html>
