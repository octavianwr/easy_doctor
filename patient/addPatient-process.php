<?php
if(isset($_POST['add'])){
  //inlcude configurasi koneksi
 include('../config.php');
  //menangkap data dari tambah.php
  $id_patient  = $_POST['id_patient'];
  $name       = $_POST['name'];
  $address     = $_POST['address'];
  $email      = $_POST['email'];
  $phone_number = $_POST['phone_number'];
  $birth_date  = $_POST['birth_date'];
  $username   = $_POST['username'];
  $password   = $_POST['password'];
 
  //qwey menympan datanya
  $simpan="INSERT INTO pasien SET
        id_patient  = '$id_patient',
        name       = '$name',
        address     = '$address',
        email      = '$email',
        phone_number = '$phone_number',
        birth_date  = '$birth_date',
        username   = '$username',
        password   = '$password'";
$input = mysql_query($simpan); //eksekusinya
 //mencek sukses atau tidak
 if($input){
    echo 'Data berhasil di tambahkan! ';  //Message if Process Succes
  echo '<a href="addPatient.php">Kembali</a>'; //link to addPatient.php
   }else{
    echo 'Gagal menambahkan data! ';  //Message if Process fail
  echo '<a href="addPatient.php">Kembali</a>'; //link to addPatient.php
   }

}else{ 

 
 echo '<script>window.history.back()</script>';

}
?>