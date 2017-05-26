<?php
  include '../connect.php';
  //require 'header.php';
  if($_SESSION['id_hospital']=="nouser"){ //ini masih status global, belum dipisah antara pasien dan admin
?>
<script language="javascript">alert("Anda belum sign in");</script>
<script>document.location.href='signin.php';</script>
  <?php }

  if($_SESSION['id_hospital']!="nouser"){ //ini masih status global, belum dipisah antara pasien dan admin
        $id_hospital = $_SESSION['id_hospital'];
        $id_patient = $_SESSION['id_patient'];
        $id_doctor = $_SESSION['id_doctor'];
        $status = "DITOLAK";

        $acc_patient = mysqli_query($connect, "UPDATE booking SET status = '$status' WHERE id_hospital = '$id_hospital' AND id_doctor = '$id_doctor' AND id_patient = '$id_patient'");

      //  $acc_patient = mysqli_query($connect, "UPDATE booking SET status = '$status' WHERE id_patient = $id_pasien" );

        if($acc_patient) {
          ?>
          <script language="javascript">alert("Kamu telah berhasil menerima patient");</script>
          <script>document.location.href='ask_booking.php';</script>
          <?php
        }
        else  {
          ?>
          <script language="javascript">
          alert("Informasi yang anda ubah gagal");</script>
          <script>document.location.href='ask_booking.php';</script>
          <?php
        }

  }
  ?>
