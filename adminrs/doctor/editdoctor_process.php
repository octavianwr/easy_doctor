<?php
require_once '../../connect.php';
if($_SESSION['id_hospital']=="nouser"){
?>
<script>document.location.href='signin.php';</script>
<?php }
if (isset($_SESSION['id_hospital']))
{
  $id_hospital = $_SESSION['id_hospital'];
  $id_doctor = $_SESSION['id_doctor'];
}

if($_POST){

  $nama = $_POST['name'];
  $spec = $_POST['spesialisasi'];
  $email = $_POST['email'];
  $tlp = $_POST['phonenumber'];

  $edit_profile = mysqli_query($connect, "UPDATE doctor SET name = '$nama',
  email = '$email', phone_number_doc = '$tlp', id_specialization = '$spec'
  WHERE id_doctor = $id_doctor" );

  if($edit_profile) {
    ?>
    <script language="javascript">alert("Informasi umum berhasil diubah");</script>
    <script>document.location.href='listdoctor.php';</script>
    <?php
  }
  else  {
    ?>
    <script language="javascript">
    alert("Informasi umum gagal diubah, silahkan isi dengan benar");</script>
    <script>document.location.href='listdoctor.php';</script>
    <?php
  }
  }
