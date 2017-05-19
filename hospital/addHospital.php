<!DOCTYPE html>
<html>
<head>
 <title>TAMBAH DATA</title>
</head>
<body>
 <h2>TAMBAH RUMAH SAKIT</h2>
  <p><a href="../index.php">Beranda</a> / <a href="addHospital.php">Tambah Data</a></p>
  <h3>BUAT DATA PASIEN</h3>
  <form action="addHospital-process.php" method="post">
  <table cellpadding="3" cellspacing="0">
   
   <tr>
    <td>ID Rumah Sakit</td>
    <td>:</td>
    <td><input type="text" name="id_hospital" size="20" required></td>
   </tr>
   <tr>
    <td>Nama Rumah Sakit</td>
    <td>:</td>
    <td><input type="text" name="hospital_name" size="20" required></td>
   </tr>
   <tr>
    <td>Nomor Telephone</td>
    <td>:</td>
    <td><input type="text" name="phone_number" size="20" required></td>
   </tr>
    <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><input type="text" name="street" size="20" required></td>
   </tr>
   <tr>
    <td>Kota</td>
    <td>:</td>
    <td><input type="text" name="city" size="20" required></td>
   </tr>
   <tr>
    <td>Provinsi</td>
    <td>:</td>
    <td><input type="text" name="province" size="20" required></td>
   </tr>
   <tr>
    <td>Username</td>
    <td>:</td>
    <td><input type="text" name="username" size="20" required></td>
   </tr>
   <tr>
    <td>Password</td>
    <td>:</td>
    <td><input type="password" name="password" size="20" required></td>
   </tr>

    <tr>
  
    <td>:</td>
    <td><button type="submit" name="add" >Submit</button>
   </td>
   </tr>
  </table>
 </form>
</body>
</html>