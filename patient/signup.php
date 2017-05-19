<?php
  include '../connect.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrasi Pasien</title>
  </head>
  <body>
    <h4>Registrasi Pasien</h4>
    <form class ="col s12" name="uploader" action="signup_process.php" method="POST" enctype="multipart/form-data">
      Nama lengkap<br>
      <input type="text" name="name" id="name" required>
      <br>username <br>
      <input type="text" name="username" id="username" required>
      <br>email<br>
      <input  type="email" name="email" id="email" required>
      <br>password <br>
      <input type="password" name="pass" id="pass" min="6" required>
      <br>tanggal lahir <br>
      <input type="date" name="birth" class="datepicker" required>
      <br>nomor telpon <br>
      <input type="text" pattern="[0-9]" name="phonenumber" id="phonenumber" required>
      <br> alamat <br>
      <textarea id="textarea1" name="address" class="materialize-textarea" required></textarea>
      <br><span>Unggah Foto Profil</span><br>
      <input type="file" name="photo">
      <p>
      <input type="checkbox" id="patient" required/>
      <label for="test5">Saya Setuju</label>
      </p>
      <br><button class="btn waves-effect waves-teal" type="submit" >Submit</button>
    </form>
  </body>
</html>
