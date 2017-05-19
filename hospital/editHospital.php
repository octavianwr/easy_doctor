 <!DOCTYPE html>
<html>
<head>
 <title>EASY DOCTOR</title>
</head>
<body>
 <h2>EASY DOCTOR</h2>
  <p><a href="../index.php">Beranda</a> / <a href="addHospital.php">Tambah Data</a></p>
  <h3>EDIT DATA RUMAH SAKIT</h3>
  <?php
 //Process to gets data from database to show based id_doctor that showed from -> editDoctor.php?id=id_doctor
  //include atau memasukkan file koneksi ke database
 include('../config.php');
  //make variabel $id that the value is from URL GET id -> editDoctor.php?id=id_doctor
 $id = $_GET['id'];
  //do query to database with SELECT table member in condition WHERE id_doctor = '$id'
 $show = mysql_query("SELECT * FROM admin_rs WHERE id_hospital='$id'");
  //check if data is exist or not
 if(mysql_num_rows($show) == 0){
    //if there is no match then direct to home -> index.php
  echo '<script>window.history.back()</script>';
   }else{
   //if found, create variabel $data
  $data = mysql_fetch_assoc($show); //gets database that showed in bottom of form
  }
 ?>
  <form action="editHospital-process.php" method="post">
  <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- make input hidden and the value is id_doctor-->
  <table cellpadding="3" cellspacing="0">
   
   <tr>
    <td>ID Rumah Sakit</td>
    <td>:</td>
    <td><input type="text" name="id_hospital" size="20" value="<?php echo $data['id_hospital']; ?>" required></td> <!-- value gets from query -->
   </tr>
   <tr>
    <td>Nama Rumah Sakit</td>
    <td>:</td>
    <td><input type="text" name="hospital_name" size="20" value="<?php echo $data['hospital_name']; ?>" required></td> 
   </tr>
   <tr>
    <td>Nomor Telephone</td>
    <td>:</td>
    <td><input type="number" name="phone_number" size="20" value="<?php echo $data['phone_number']; ?>" required></td> 
   </tr>
    <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><input type="text" name="street" size="20" value="<?php echo $data['street']; ?>" required></td> \
   </tr>
   <tr>
    <td>Kota</td>
    <td>:</td>
    <td><input type="text" name="city" size="20" value="<?php echo $data['city']; ?>" required></td> \
   </tr>
   <tr>
    <td>Provinsi</td>
    <td>:</td>
    <td><input type="text" name="province" size="20" value="<?php echo $data['province']; ?>" required></td> \
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