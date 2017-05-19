<?php
if(isset($_POST['add'])){
  //inlcude configuration connection in addDoctor.php
 include('../config.php');
  //gets data from addDoctor.php
  $id_doctor  = $_POST['id_doctor'];
  $name       = $_POST['name'];
  $specialization = $_POST['specialization'];
  $schedule      = $_POST['schedule'];
  $username   = $_POST['username'];
  $password   = $_POST['password'];
 
  //qwery to save data
  $simpan="INSERT INTO dokter SET
        id_doctor  = '$id_doctor',
        name       = '$name',
        specialization = '$specialization',
        schedule      = '$schedule',
        username   = '$username',
        password   = '$password'";
$input = mysql_query($simpan); //excetute SQL
 //Check if succes
 if($input){
    echo 'Data berhasil di tambahkan! ';  //Message if Process Succes
  echo '<a href="addDoctor.php">Kembali</a>'; //link to addDoctor.php
   }else{
    echo 'Gagal menambahkan data! ';  //Message if Process fail
  echo '<a href="addDoctor.php">Kembali</a>'; //link to addDoctor.php
   }

}else{ 

 
 echo '<script>window.history.back()</script>';

}
?>