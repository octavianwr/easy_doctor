<?php
	include "../../connect.php";

	$username = $_POST['username'];
	$nama = $_POST['name'];
	$email = $_POST['email'];
	$telp = $_POST['phonenumber'];
	$tl = $_POST['birth'];
	$password = $_POST['pass'];

		$sql_tambah = "INSERT INTO patient(id_patient, name, username, email, password, birth_date, phone_number, address)
					   VALUES ('','$nama', '$username', '$email', '$password', '$tl', '$telp', '$alamat')";
		$result = mysqli_query($connect,$sql_tambah);
	if($result) {?>
		<script language="javascript">alert("Register Successful");</script>
			<script>document.location.href='../index.php';</script>
	<?php
	}else {
		?>
		<script language="javascript">alert("Register Failed");</script>
			<script>document.location.href='signup.php';</script>
	<?php
	}
mysqli_close($connect);
?>
