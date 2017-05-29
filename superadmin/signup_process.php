<?php
	include "../connect.php";

	$email = $_POST['email'];
	$password = $_POST['pass'];

	$password=password_hash($password, PASSWORD_DEFAULT);


	
		$sql_tambah = "INSERT INTO super_admin(email, password)
					   VALUES ('$email', '$password')";
		mysqli_query($connect,$sql_tambah);
		if($sql_tambah){
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
