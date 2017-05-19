<?php
	include "../connect.php";
  
	$username = $_POST['username'];
	$nama = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
	$jalan = $_POST['street'];
	$kota = $_POST['city'];
	$prov = $_POST['prov'];
	$tlp = $_POST['phonenumber'];
	$foto_size = $_FILES["photo"]["size"];
	$folder = "img";
	$foto_loc = $_FILES["photo"]["tmp_name"];
	$foto_name = $folder."/".$_FILES["photo"]["name"];

	if($foto_size < 1000000){
		move_uploaded_file($foto_loc, $foto_name);
		$sql_tambah = "INSERT INTO admin_rs(id_hospital, hospital_name, username, email, password, phone_number, street, city, province, photo_rs)
					   VALUES ('','$nama', '$username', '$email', '$password', '$tlp', '$jalan', '$kota', '$prov', '$foto_name')";
		mysqli_query($connect,$sql_tambah);
	?>
		<script language="javascript">alert("Register Successful");</script>
			<script>document.location.href='profile.php';</script>
	<?php
	}else {
		?>
		<script language="javascript">alert("Register Failed");</script>
			<script>document.location.href='signup.php';</script>
	<?php
	}
mysqli_close($connect);
?>
