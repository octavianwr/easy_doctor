<!DOCTYPE html>
<html>
<head>
 <title>TAMBAH DATA</title>
</head>
<body>
 <h2>TAMBAH PASIEN</h2>
  <p><a href="../index.php">Beranda</a> / <a href="addDoctor.php">Tambah Data</a></p>
  <h3>BUAT DATA PASIEN</h3>
  <form action="addDoctor-process.php" method="post">
  <table cellpadding="3" cellspacing="0">
   
   <tr>
    <td>ID Dokter</td>
    <td>:</td>
    <td><input type="text" name="id_doctor" size="20" required></td>
   </tr>
   <tr>
    <td>Nama Dokter</td>
    <td>:</td>
    <td><input type="text" name="name" size="20" required></td>
   </tr>
   <tr>
    <td>Spesialisasi</td>
    <td>:</td>
    <td><input type="text" name="specialization" size="20" required></td>
   </tr>
    <tr>
    <td>Jadwal</td>
    <td>:</td>
    <td><input type="text" name="schedule" size="20" required></td>
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