<?php
if(isset($_POST['add'])){
  //inlcude configuration connection in addDoctor.php
 include('../config.php');
  //gets data from addDoctor.php
  $id_hospital  = $_POST['id_hospital'];
  $hospital_name       = $_POST['hospital_name'];
  $phone_number = $_POST['phone_number'];
  $street      = $_POST['street'];
  $city      = $_POST['city'];
  $province      = $_POST['province'];
  $username   = $_POST['username'];
  $password   = $_POST['password'];
 
  //qwery to save data
  $simpan="INSERT INTO admin_rs SET
        id_hospital  = '$id_hospital',
        hospital_name = '$hospital_name',
        phone_number = '$phone_number',
        street      = '$street',
        city      = '$city',
        province      = '$province',
        username   = '$username',
        password   = '$password'";
$input = mysql_query($simpan); //excetute SQL
 //Check if succes
 if($input){
    echo 'Data berhasil di tambahkan! ';  //Message if Process Succes
  echo '<a href="addHospital.php">Kembali</a>'; //link to addDoctor.php
   }else{
    echo 'Gagal menambahkan data! ';  //Message if Process fail
  echo '<a href="addHospital.php">Kembali</a>'; //link to addDoctor.php
   }

}else{ 

 
 echo '<script>window.history.back()</script>';

}
?>