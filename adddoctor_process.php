<?php
require_once 'connect.php';
if($_SESSION['id_hospital']=="nouser"){
?>
<script language="javascript">alert("Anda belum login");</script>
<script>document.location.href='../signin.php';</script>
<?php }

  $nama = $_POST['name'];
  $email = $_POST['email'];
  $tlp = $_POST['phonenumber'];


    if($_SESSION['id_hospital']!="nouser"){
	$sql_tambah = "INSERT INTO doctor(name, email, phone_number_doc, id_hospital) VALUES ('$nama', '$email', '$tlp', '$id_hospital')";
		mysqli_query($connect,$sql_tambah);
	?>
		<script language="javascript">alert("Add Doctor Successful");</script>
			<script>document.location.href='listdoctor.php';</script>
	<?php
}
mysqli_close($connect);
?>
