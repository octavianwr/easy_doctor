<?php
	include "../connect.php";

	$username = $_POST['username'];
	$nama = $_POST['name'];
	$email = $_POST['email'];
	$telp = $_POST['phonenumber'];
	$tl = $_POST['birth'];
	$password = $_POST['pass'];
	$alamat = $_POST['address'];
	$foto_size = $_FILES["photo"]["size"];
	$folder = "img";
	$foto_loc = $_FILES["photo"]["tmp_name"];
	$foto_name = $folder."/".$_FILES["photo"]["name"];
	if($foto_size < 1000000){
		move_uploaded_file($foto_loc, $foto_name);
		$sql_tambah = "INSERT INTO patient(id_patient, name, username, email, password, birth_date, phone_number, address, photo_patient)
					   VALUES ('','$nama', '$username', '$email', '$password', '$tl', '$telp', '$alamat', '$foto_name')";
		mysqli_query($connect,$sql_tambah);
	?>
		<script language="javascript">alert("Register Successful");</script>
			<script>document.location.href='profile.php';</script>
	<?php
	}else {
		?>
		<script language="javascript">alert("Register Failed");</script>
			<script>document.location.href='daftar.php';</script>
	<?php
	}
mysqli_close($connect);
?>
