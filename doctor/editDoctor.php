 <!DOCTYPE html>
<html>
<head>
 <title>EASY DOCTOR</title>
</head>
<body>
 <h2>EASY DOCTOR</h2>
  <p><a href="../index.php">Beranda</a> / <a href="addDoctor.php">Tambah Data</a></p>
  <h3>Edit Data Pasien</h3>
  <?php
 //Process to gets data from database to show based id_doctor that showed from -> editDoctor.php?id=id_doctor
  //include atau memasukkan file koneksi ke database
 include('../config.php');
  //make variabel $id that the value is from URL GET id -> editDoctor.php?id=id_doctor
 $id = $_GET['id'];
  //do query to database with SELECT table member in condition WHERE id_doctor = '$id'
 $show = mysql_query("SELECT * FROM dokter WHERE id_doctor='$id'");
  //check if data is exist or not
 if(mysql_num_rows($show) == 0){
    //if there is no match then direct to home -> index.php
  echo '<script>window.history.back()</script>';
   }else{
   //if found, create variabel $data
  $data = mysql_fetch_assoc($show); //gets database that showed in bottom of form
  }
 ?>
  <form action="editDoctor-process.php" method="post">
  <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- make input hidden and the value is id_doctor-->
  <table cellpadding="3" cellspacing="0">
   
   <tr>
    <td>ID Dokter</td>
    <td>:</td>
    <td><input type="text" name="id_doctor" size="20" value="<?php echo $data['id_doctor']; ?>" required></td> <!-- value gets from query -->
   </tr>
   <tr>
    <td>Nama Dokter</td>
    <td>:</td>
    <td><input type="text" name="name" size="20" value="<?php echo $data['name']; ?>" required></td> 
   </tr>
   <tr>
    <td>Spesialisasi</td>
    <td>:</td>
    <td><input type="text" name="specialization" size="20" value="<?php echo $data['specialization']; ?>" required></td> 
   </tr>
    <tr>
    <td>Jadwal</td>
    <td>:</td>
    <td><input type="text" name="schedule" size="20" value="<?php echo $data['schedule']; ?>" required></td> \
   </tr>
   
   <tr>
    <td>Username</td>
    <td>:</td>
    <td><input type="text" name="username" size="20" value="<?php echo $data['username']; ?>" required></td> 
   </tr>
   <tr>
    <td>Password</td>
    <td>:</td>
    <td><input type="text" name="password" size="20" value="<?php echo $data['password']; ?>" required></td> 
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