<?php
  session_start();
  include '../config.php';
  //require 'header.php';
  if($_SESSION['id_hospital'] == "nouser"){
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
    ini halaman <b>admin rumah sakit</b>
    <form class="" action="index.php" method="post">
      <button type="submit">HOME</button>
    </form>
    <br><form class="" action="profile.php" method="">
      <button type="submit">PROFILE</button>
    </form>
    </form>
    <br><form class="" action="doctor/adddoctor.php" method="">
      <button type="submit">TAMBAH DOKTER</button>
    </form>
    <br><form class="" action=doctor/listdoctor.php method="post">
      <button type="submit">LIST DOKTER KITA</button>
    </form>
    <br><form class="" action="notification.php" method="post">
      <button type="submit" a href=index.php>NOTIFIKASI</button>
    </form>
    <br><form class="" action="../contactus.php" method="post">
      <button type="submit">HUBUNGI KAMI</button>
    </form>
    <br><form class="" action="signout.php" method="post">
      <button type="submit">SIGN OUT</button>
    </form>
  </body>
</html>
