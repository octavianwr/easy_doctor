<?php
  include '../connect.php';
  //require 'header.php';
  if($_SESSION['id_patient']=="nouser"){ //ini masih status global, belum dipisah antara pasien dan admin
?>
<script language="javascript">alert("Anda belum sign in");</script>
<script>document.location.href='signin.php';</script>
  <?php }

  if($_SESSION['id_patient']!="nouser"){ //ini masih status global, belum dipisah antara pasien dan admin
        $id_pasien = $_SESSION['id_patient'];
    if($_GET['id']){
          $id_dokter = $_GET['id'];
          $query_doctor = mysqli_query($connect, "SELECT * FROM doctor where id_doctor = '$id_dokter'");
          $result_doctor = mysqli_fetch_array($query_doctor);

          $query_patient = mysqli_query($connect, "SELECT * FROM patient where id_patient = '$id_pasien'");
          $result_patient = mysqli_fetch_array($query_patient);

          $id_dokter = $result_doctor['id_doctor'];
          $id_rs = $result_doctor['id_hospital'];
          $nama_dokter = $result_doctor['name'];
          $nama_pasien = $result_patient['name'];
          $status = "MENUNGGU";

          $sql_posting = "INSERT INTO booking(id_booking, name_doctor, name_patient, id_hospital, id_patient, id_doctor, status)
      						VALUE('','$nama_dokter', '$nama_pasien', '$id_rs', '$id_pasien','$id_dokter', '$status')";
      		$hasil = mysqli_query($connect, $sql_posting);

          if ($hasil) {
      ?>

      		<script language="javascript">alert("Requesting Successful! Please Wait For Confirmation");</script>
      		<script>document.location.href='index.php';</script>
      <?php
      		}
      	else{
      ?>
          <?php echo $nama_dokter; ?>
      		<script language="javascript">alert("Requesting Failed! Please Try Again");</script>
      		<script>document.location.href='index.php';</script>
      <?php
      		}
    }
  }
  ?>
