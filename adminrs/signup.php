<?php
  include '../connect.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrasi Admin</title>
  </head>
  <body>
    <h4>Registrasi Admin Rumah Sakit</h4>
    <form class ="col s12" name="uploader" action="signup_process.php" method="POST" enctype="multipart/form-data">
      Nama Rumah Sakit<br>
      <input type="text" name="name" id="name" required>
      <br>username <br>
      <input type="text" name="username" id="username" required>
      <br>email<br>
      <input  type="email" name="email" id="email" required>
      <br>password <br>
      <input type="password" name="pass" id="pass" min="6" required>
      <br>No. Telepon <br>
      <input type="number" name="phonenumber" id="phonenumber" required>
      <br>jalan <br>
      <input type="text" name="street" id="street" required>
      <br>kota <br>
      <input type="text" name="city" id="city" required>
      <br>provinsi <br>
      <input type="text" name="prov" id="prov" required>
      <br><span>Unggah Foto Profil</span><br>
      <input type="file" name="photo">
      <p>
      <input type="checkbox" id="admin_rs" required/>
      <label for="test5">Klik jika setuju</label>
      </p>
      <br><button class="btn waves-effect waves-teal" type="submit" >Submit</button>
    </form>
  </body>
</html>
