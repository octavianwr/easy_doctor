<?php
	include "../../connect.php";

	$username = $_POST['username'];
	$nama = $_POST['name'];
	$email = $_POST['email'];
	$telp = $_POST['phonenumber'];
	$password = $_POST['pass'];
	$sex = $_POST['gender'];
	$year = $_POST['bday_yy'];
	$month= $_POST['bday_mm'];
	$day = $_POST['bday_dd'];

	$patient = mysqli_query($connect, "SELECT * FROM patient where email = '$email'");
	$list_patient = mysqli_fetch_array($patient);
	if($list_patient){?>
		<script language="javascript">alert("Email Telah digunakan");</script>
		<script>document.location.href='signup.php';</script><?php
	}
	else{
		$sql_tambah = "INSERT INTO patient(id_patient, name, username, email, password, phone_number, birth_date, sex)
					   VALUES ('','$nama', '$username', '$email', '$password', '$telp', '$year-$day-$month', '$sex')";
		$result = mysqli_query($connect,$sql_tambah);
	if($result) {?>
		<?php $_SESSION['email']=$email; ?>
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
	}
?>
