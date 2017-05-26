<?php
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['save'])){
  //inlcude atau memasukkan file koneksi ke database
 include('../config.php');
  //jika tombol tambah benar di klik maka lanjut prosesnya


  $id         = $_POST['id']; //membuat variabel $id dan datanya dari inputan hidden id
  $id_patient  = $_POST['id_patient'];
  $name       = $_POST['name'];
  $address     = $_POST['address'];
  $email      = $_POST['email'];
  $phone_number = $_POST['phone_number'];
  $birth_date  = $_POST['birth_date'];
  $username   = $_POST['username'];
  $password   = $_POST['password'];
  //melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE member_id='$id' <- diambil dari inputan hidden id
 $update = mysql_query("UPDATE pasien SET id_patient='$id_patient' ,name='$name', address='$address' ,email='$email', phone_number='$phone_number', birth_date='$birth_date', username='$username', password='$password'  WHERE id_patient='$id'") or die(mysql_error());
  //jika query update sukses
 if($update){
    echo 'Data berhasil di simpan! ';  //Pesan jika proses simpan sukses
  echo '<a href="../index.php?id='.$id.'">Kembali</a>'; //membuat Link untuk kembali ke halaman edit
   }else{
    echo 'Gagal menyimpan data! ';  //Pesan jika proses simpan gagal
  echo '<a href="editPatient.php?id='.$id.'">Kembali</a>'; //membuat Link untuk kembali ke halaman edit
   }

}else{ //jika tidak terdeteksi tombol simpan di klik

 //redirect atau dikembalikan ke halaman edit
 echo '<script>window.history.back()</script>';

}
?>