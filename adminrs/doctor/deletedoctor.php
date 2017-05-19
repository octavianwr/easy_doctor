<?php
  include "../../connect.php";
  $id_doctor = $_GET['id'];
    $sql_hapus= "DELETE FROM doctor WHERE id_doctor= '$id_doctor'";

    if (mysqli_query($connect, $sql_hapus)){ //mysqli_query buat
  ?>
      <script language="javascript">alert("Delete Successful");</script>
      <script>document.location.href='listdoctor.php';</script>
  <?php
    }
    else{
  ?>
      <script language="javascript">alert("Delete Failed");</script>
      <script>document.location.href='listdoctor.php';</script>
  <?php
    }
	mysqli_close($connect);
?>
