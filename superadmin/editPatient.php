 <!DOCTYPE html>
<html>
<head>
 <title>EASY DOCTOR</title>
</head>
<body>
 <h2>EASY DOCTOR</h2>
  <p><a href="../index.php">Beranda</a> / <a href="addPatient.php">Tambah Data</a></p>
  <h3>Edit Data Pasien</h3>
  <?php
 //proses mengambil data ke database untuk ditampilkan di form edit berdasarkan member_id yg didapatkan dari GET id -> edit.php?id=member_id
  //include atau memasukkan file koneksi ke database
 include('../config.php');
  //membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=member_id
 $id = $_GET['id'];
  //melakukan query ke database dg SELECT table member dengan kondisi WHERE member_id = '$id'
 $show = mysql_query("SELECT * FROM pasien WHERE id_patient='$id'");
  //cek apakah data dari hasil query ada atau tidak
 if(mysql_num_rows($show) == 0){
    //jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
  echo '<script>window.history.back()</script>';
   }else{
   //jika data ditemukan, maka membuat variabel $data
  $data = mysql_fetch_assoc($show); //mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
  }
 ?>
  <form action="editPatient-process.php" method="post">
  <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- membuat inputan hidden dan nilainya adalah member_id -->
  <table cellpadding="3" cellspacing="0">
   
   <tr>
    <td>ID Pasien</td>
    <td>:</td>
    <td><input type="text" name="id_patient" size="20" value="<?php echo $data['id_patient']; ?>" required></td> <!-- value diambil dari hasil query -->
   </tr>
   <tr>
    <td>Nama Lengkap</td>
    <td>:</td>
    <td><input type="text" name="name" size="20" value="<?php echo $data['name']; ?>" required></td> <!-- value diambil dari hasil query -->
   </tr>
   <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><input type="text" name="address" size="20" value="<?php echo $data['address']; ?>" required></td> <!-- value diambil dari hasil query -->
   </tr>
    <tr>
    <td>Email</td>
    <td>:</td>
    <td><input type="email" name="email" size="20" value="<?php echo $data['email']; ?>" required></td> <!-- value diambil dari hasil query -->
   </tr>
    <tr>
    <td>Nomor HP</td>
    <td>:</td>
    <td><input type="number" name="phone_number" size="20" value="<?php echo $data['phone_number']; ?>" required></td> <!-- value diambil dari hasil query -->
   </tr>
   <tr>
    <td>Tanggal Lahir</td>
    <td>:</td>
    <td><input type="date" name="birth_date" size="20" value="<?php echo $data['birth_date']; ?>" required></td> <!-- value diambil dari hasil query -->
   </tr>
   <tr>
    <td>Username</td>
    <td>:</td>
    <td><input type="text" name="username" size="20" value="<?php echo $data['username']; ?>" required></td> <!-- value diambil dari hasil query -->
   </tr>
   <tr>
    <td>Password</td>
    <td>:</td>
    <td><input type="text" name="password" size="20" value="<?php echo $data['password']; ?>" required></td> <!-- value diambil dari hasil query -->
   </tr>

   
   <tr>
    <td>&nbsp;</td>
    <td></td>
    <td><input type="submit" name="save" value="Simpan"></td>
   </tr>
  </table>
 </form>
</body>
</html>