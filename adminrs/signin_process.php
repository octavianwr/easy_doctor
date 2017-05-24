<?php
	session_start();
	include '../config.php';
	
if(isset($_SESSION['user'])!=""){
  header("location:index.php");
  exit;
}
	$email = $_POST['email'];
	$password = $_POST['pass'];	

	$ambil_password = mysqli_query($koneksi, "SELECT * FROM admin_rs where email='$email'");
	$kolom = mysqli_fetch_array($ambil_password, MYSQLI_ASSOC);
	if(password_verify($password, $kolom['password'])) {
		$_SESSION['id_hospital'] = $kolom['id_hospital'];
		$_SESSION['status'] = "admin";
		?>
			<script language="javascript">alert("Logging Successful");</script>
			<script>document.location.href='index.php';</script>
		<?php
	}
	else { ?>
			<script language="javascript">alert("Logging Unsuccessful");</script>
			<script>document.location.href='signin.php';</script>
	<?php }
	mysqli_close($koneksi);
?>
