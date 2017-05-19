<?php
//start edit data

//check if save button clicked
if(isset($_POST['save'])){
  //include or connect to database
 include('../config.php');
  //if TRUE, continue the process


  $id         = $_POST['id']; //create variabel $id and data from hidden id
  $id_doctor  = $_POST['id_doctor'];
  $name       = $_POST['name'];
  $specialization = $_POST['specialization'];
  $schedule      = $_POST['schedule'];
  $username   = $_POST['username'];
  $password   = $_POST['password'];
  //do query with command UPDATE to update data to database with condition WHERE id_doctor='$id' <- taken from hidden id
 $update = mysql_query("UPDATE dokter SET id_doctor='$id_doctor' ,name='$name', specialization='$specialization' ,schedule='schedule', username='$username', password='$password'  WHERE id_doctor='$id'") or die(mysql_error());
  //if query succes then update
 if($update){
    echo 'Data berhasil di simpan! ';  //message if success
  echo '<a href="../index.php?id='.$id.'">Kembali</a>'; //direct link to index.php
   }else{
    echo 'Gagal menyimpan data! ';  //messsage if fail
  echo '<a href="editPatient.php?id='.$id.'">Kembali</a>'; //direct link to editPatient.php
   }

}else{ //if save button not detected

 //redirect to edit page
 echo '<script>window.history.back()</script>';

}
?>