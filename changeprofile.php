<?php
  include '../connect.php';
  if($_SESSION['id_hospital']=="nouser"){
  ?>
  <script language="javascript">alert("Anda belum login");</script>
  <script>document.location.href='signin.php';</script>
  <?php }
  if (isset($_SESSION['id_hospital'])) {
    $id_hospital = $_SESSION['id_hospital'];
  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>edit profile</title>
  </head>
  <body>
    <?php
      $query = mysqli_query($connect, "SELECT * FROM admin_rs WHERE id_hospital = '$id_hospital'");
      $result = mysqli_fetch_array($query);
    ?>
            <form action="changeprofile_process.php" method="post">
              Nama Rumah Sakit<br>
              <input type="text" name="name" id="name" value="<?php echo $result['hospital_name']?>">
              <br>Email<br>
              <input  type="email" name="email" id="email" value="<?php echo $result['email']?>">
              <br>Password <br>
              <input type="password" name="pass" id="pass" min="6" value="<?php echo $result['password']?>">
              <br>Nomor Telpon <br>
              <input type="number" name="phonenumber" id="phonenumber" value="<?php echo $result['phone_number']?>">
              <br>Jalan <br>
              <input type="text" name="street" id="" value="<?php echo $result['street']?>">
              <br>Kota <br>
              <input type="text" name="city" id="" value="<?php echo $result['city']?>">
              <br>Provinsi <br>
              <input type="text" name="province" id="" value="<?php echo $result['province']?>">
              <br><br><span>Unggah Foto Rumah Sakit</span><br>
              <input type="file" name="photo" value="<?php echo $result['photo_rs']?>">
              <p>
              <input type="checkbox" id="admin_rs" required/>
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
