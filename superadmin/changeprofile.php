<?php
  include '../connect.php';
  if($_SESSION['id_patient']=="nouser"){
  ?>
  <script language="javascript">alert("Anda belum login");</script>
  <script>document.location.href='signin.php';</script>
  <?php }
  if (isset($_SESSION['id_patient'])) {
    $id_patient = $_SESSION['id_patient'];
  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>edit profile</title>
  </head>
  <body>
    <?php
      $query = mysqli_query($connect, "SELECT * FROM patient WHERE id_patient = '$id_patient'");
      $result = mysqli_fetch_array($query);
    ?>
            <form action="changeprofile_process.php" method="post">
              <img src="<?php echo $result['photo_patient']?>" class="circle responsive-img" width="250" height="250" alt=""><br>
              <br><br><span>Unggah Foto Profile</span><br>
              <input type="file" name="photo">
              <br><br>

              Nama Lengkap<br>
              <input type="text" name="name" id="name" value="<?php echo $result['name']?>">
              <br>Username<br>
              <input type="text" name="username" id="username" value="<?php echo $result['username']?>">
              <br>Email<br>
              <input  type="email" name="email" id="email" value="<?php echo $result['email']?>">
              <br>Tanggal Lahir <br>
              <input  type="date" name="birth" id="email" value="<?php echo $result['birth_date']?>">
              <br>Password <br>
              <input type="password" name="pass" id="pass" min="6" value="<?php echo $result['password']?>">
              <br>Nomor Telpon <br>
              <input type="number" name="phonenumber" id="phonenumber" value="<?php echo $result['phone_number']?>">
              <br>Alamat <br>
              <input type="text" name="address" id="" value="<?php echo $result['address']?>">
              <input type="checkbox" id="patient" required/>
              <label for="test5">Saya menyetujui Perubahan</label>
              </p>
              <br><button class="btn waves-effect waves-teal" type="submit" >SUBMIT</button>
              </form>
              <form class="" action="profile.php" method="post">
                <button type="submit" name="button">BATAL</button>
              </form>
  </body>
</html>
  <?php } ?>
