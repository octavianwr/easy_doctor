<?php
require_once '../connect.php';
if($_SESSION['id_patient']=="nouser"){
?>
<script language="javascript">alert("Anda belum login");</script>
<script>document.location.href='signin.php';</script>
<?php }
if (isset($_SESSION['id_patient'])) $id_patient = $_SESSION['id_patient'];

if($_POST){
  $nama = $_POST['name'];
  $username = $_POST['username'];
  $ttl = $_POST['birth'];
  $alamat = $_POST['address'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $tlp = $_POST['phonenumber'];

  $edit_profile = mysqli_query($connect, "UPDATE patient SET name = '$nama',
  username = '$username', address = '$alamat', email = '$email', phone_number = '$$tlp',
  birth_date = '$ttl' WHERE id_patient = $id_patient" );

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
