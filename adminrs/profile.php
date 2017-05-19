<?php
include '../connect.php';

    if($_SESSION['id_hospital'] == "nouser"){
      ?>
      <script language="javascript">alert("Anda belum login");</script>
      <script>document.location.href='signin.php';</script>
      <?php
    }
      if (isset($_SESSION['id_hospital'])) {
        $id_hospital = $_SESSION['id_hospital'];
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
      $query = mysqli_query($connect, "SELECT * FROM admin_rs WHERE id_hospital = '$id_hospital'");
      $result = mysqli_fetch_array($query);
    ?>
      <form class="" action="changeprofile.php" method="post">
        <img src="<?php echo $result['photo_rs']?>" class="circle responsive-img" width="250" height="250" alt=""><br>
        <h4>Profil : <?php echo "Rumah Sakit " .$result['hospital_name']?></h4>
        <br>Nama Rumah Sakit:
        <?php echo $result['hospital_name']?>
        <br>Email:
        <?php echo $result['email']?>
        <br> No HP:
        <?php echo $result['phone_number']?>
        <br>Alamat
        <?php echo "Jalan " .$result['street'] .", Kota " .$result['city'] .",Provinsi " .$result['province']?>

        <br><br><button type="submit" name="edit_profile">EDIT PROFILE</button>
      </form>
  </body>
  </html>
<?php } ?>
