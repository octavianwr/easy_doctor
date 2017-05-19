<?php
include '../connect.php';
if($_SESSION['id_patient']=="nouser"){
?>
<script language="javascript">alert("Anda belum login");</script>
<script>document.location.href='signin.php';</script>
<?php }
if (isset($_SESSION['id_patient'])) {
  $id_patient = $_SESSION['id_patient']
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <body>

    <?php
      $query = mysqli_query($connect, "SELECT * FROM patient where id_patient = '$id_patient'");
      $result = mysqli_fetch_array($query);
    ?>
      <form class="" action="changeprofile.php" method="post">
        <img src="<?php echo $result['photo_patient']?>" class="circle responsive-img" width="250" height="250" alt=""><br>
        <h4>Profil : <?php echo $result['name']?></h4>
        <br>Nama:
        <?php echo $result['name']?>
        <br>Username:
        <?php echo $result['username']?>
        <br>Email
        <?php echo $result['email']?>
        <br>Tanggal Lahir
        <?php echo $result['birth_date']?>
        <br> No HP:
        <?php echo $result['phone_number']?>
        <br>Alamat
        <?php echo $result['address']?>
        <br><br><button type="submit" name="edit_profile">EDIT PROFILE</button>
      </form>
      </body>
  </html>
<?php } ?>
