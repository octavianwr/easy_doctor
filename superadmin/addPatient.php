<!DOCTYPE html>
<html>
<head>
 <title>TAMBAH DATA</title>
</head>
<body>
 <h2>TAMBAH PASIEN</h2>
  <p><a href="../index.php">Beranda</a> / <a href="addPatient.php">Tambah Data</a></p>
  <h3>BUAT DATA PASIEN</h3>
  <form action="addPatient-Process.php" method="post">
  <table cellpadding="3" cellspacing="0">
   
   <tr>
    <td>ID Pasien</td>
    <td>:</td>
    <td><input type="text" name="id_patient" size="20" required></td>
   </tr>
   <tr>
    <td>Nama Lengkap</td>
    <td>:</td>
    <td><input type="text" name="name" size="20" required></td>
   </tr>
   <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><input type="text" name="address" size="20" required></td>
   </tr>
    <tr>
    <td>Email</td>
    <td>:</td>
    <td><input type="email" name="email" size="20" required></td>
   </tr>
    <tr>
    <td>Nomor HP</td>
    <td>:</td>
    <td><input type="number" name="phone_number" size="20" required></td>
   </tr>
   <tr>
    <td>Tanggal Lahir</td>
    <td>:</td>
    <td><input type="date" name="birth_date" size="20" required></td>
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