<?php

//check if its TRUE that URL is exist in GET id -> deleteDoctor.php?id=id_doctor
if(isset($_GET['id'])){
  //include or connect to database
 include('../config.php');
  //creat variabel $id with value from URL GET id -> deleteDoctor.php?id=id_doctor
 $id = $_GET['id'];
  //check database where id_doctor='$id' exist
 $cek = mysql_query("SELECT id_doctor FROM dokter WHERE id_doctor='$id'") or die(mysql_error());
  //if data is not exist
 if(mysql_num_rows($cek) == 0){
    //redirect to index.php
  echo '<script>window.history.back()</script>';
  }else{
    //if data is exist in database, do query DELETE table member with condition WHERE id_doctor='$id'
  $del = mysql_query("DELETE FROM dokter WHERE id_doctor='$id'");
    //jika query DELETE berhasil
  if($del){
      echo 'Data pasien berhasil di hapus! ';  //message if success
   echo '<a href="../index.php">Kembali</a>'; //direct link to index.php
     }else{
      echo 'Gagal menghapus data! ';  //message if failed
   echo '<a href="../index.php">Kembali</a>'; //direct link to index.php
    }
   }
 }else{
  //redirect to index.php
 echo '<script>window.history.back()</script>';
 }
?>