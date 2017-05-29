<?php

//cek dahulu, apakah benar URL sudah ada GET id -> hapus.php?id=member_id
if(isset($_GET['id'])){
  //inlcude atau memasukkan file koneksi ke database
 include('../config.php');
  //membuat variabel $id yg bernilai dari URL GET id -> hapus.php?id=member_id
 $id = $_GET['id'];
  //cek ke database apakah ada data member dengan member_id='$id'
 $cek = mysql_query("SELECT id_patient FROM pasien WHERE id_patient='$id'") or die(mysql_error());
  //jika data member tidak ada
 if(mysql_num_rows($cek) == 0){
    //jika data tidak ada, maka redirect atau dikembalikan ke halaman beranda
  echo '<script>window.history.back()</script>';
  }else{
    //jika data ada di database, maka melakukan query DELETE table member dengan kondisi WHERE id_patient='$id'
  $del = mysql_query("DELETE FROM pasien WHERE id_patient='$id'");
    //jika query DELETE berhasil
  if($del){
      echo 'Data pasien berhasil di hapus! ';  //Pesan jika proses hapus berhasil
   echo '<a href="../index.php">Kembali</a>'; //membuat Link untuk kembali ke halaman beranda
     }else{
      echo 'Gagal menghapus data! ';  //Pesan jika proses hapus gagal
   echo '<a href="../index.php">Kembali</a>'; //membuat Link untuk kembali ke halaman beranda
    }
   }
 }else{
  //redirect atau dikembalikan ke halaman beranda
 echo '<script>window.history.back()</script>';
 }
?>