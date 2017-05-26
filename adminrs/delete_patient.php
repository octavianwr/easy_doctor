<?php
  include "../connect.php";
  $id_booking= $_GET['id'];
    $sql_hapus= "DELETE FROM booking WHERE id_booking= '$id_booking'";

    if (mysqli_query($connect, $sql_hapus)){ //mysqli_query buat
  ?>
      <script language="javascript">alert("Pasien telah selesai");</script>
      <script>document.location.href='daftar_pasien.php';</script>
  <?php
    }
    else{
  ?>
      <script language="javascript">alert("Delete Failed");</script>
      <script>document.location.href='daftar_pasien.php';</script>
  <?php
    }
	mysqli_close($connect);
?>
