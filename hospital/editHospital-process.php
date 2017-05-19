<?php
//start edit data

//check if save button clicked
if(isset($_POST['save'])){
  //include or connect to database
 include('../config.php');
  //if TRUE, continue the process
  $id         = $_POST['id'];
  $id_hospital  = $_POST['id_hospital'];
  $hospital_name       = $_POST['hospital_name'];
  $phone_number = $_POST['phone_number'];
  $street      = $_POST['street'];
  $city      = $_POST['city'];
  $province      = $_POST['province'];
  $username   = $_POST['username'];
  $password   = $_POST['password'];

  //do query with command UPDATE to update data to database with condition WHERE id_doctor='$id' <- taken from hidden id
 $update = mysql_query("UPDATE admin_rs SET id_hospital='$id_hospital' ,hospital_name='$hospital_name', phone_number='$phone_number' ,street='$street', city='$city', province='$province' ,username='$username', password='$password'  WHERE id_hospital='$id'") or die(mysql_error());
  
  //if query succes then update
 if($update){
    echo 'Data berhasil di simpan! ';  //message if success
  echo '<a href="../index.php?id='.$id.'">Kembali</a>'; //direct link to index.php
   }else{
    echo 'Gagal menyimpan data! ';  //messsage if fail
  echo '<a href="editHospital.php?id='.$id.'">Kembali</a>'; //direct link to editPatient.php
   }

}else{ //if save button not detected
 //redirect to edit page
 echo '<script>window.history.back()</script>';

}
?>