<?php
require_once '../connect.php';
if($_SESSION['id_hospital']=="nouser"){
?>
<script language="javascript">alert("Anda belum login");</script>
<script>document.location.href='signin.php';</script>
<?php }
if (isset($_SESSION['id_hospital'])) $id_hospital = $_SESSION['id_hospital'];

if($_POST){
  $nama = $_POST['name'];
  $jalan = $_POST['street'];
  $email = $_POST['email'];
  $kota = $_POST['city'];
  $prov = $_POST['province'];
  $pass = $_POST['pass'];
  $tlp = $_POST['phonenumber'];

  $edit_profile = mysqli_query($connect, "UPDATE admin_rs SET hospital_name = '$nama',
  email = '$email', phone_number = '$tlp', street = '$jalan', city = '$kota',
  province = '$prov', password = '$pass' WHERE id_hospital = $id_hospital" );

  if($edit_profile) {
    ?>
    <script language="javascript">alert("Informasi umum berhasil diubah");</script>
    <script>document.location.href='profile.php';</script>
    <?php
  }
  else  {
    ?>
    <script language="javascript">
    alert("Informasi umum gagal diubah, silahkan isi dengan benar");</script>
    <script>document.location.href='changeprofile.php';</script>
    <?php
  }
  }
?>
