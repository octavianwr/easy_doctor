<?php
	include '../config.php';
session_start();
if(isset($_SESSION['user'])!=""){
  header("location:index.php");
  exit;
}
	$email = $_POST['email'];
	$password = $_POST['pass'];

	$result_admin = mysqli_query($koneksi, "SELECT * FROM super_admin WHERE email='$email'");
	$row = mysqli_fetch_array($result_admin, MYSQLI_ASSOC);
	if(password_verify($password, $row['password'])) {
		$_SESSION['id_admin'] = $row['id_admin'];
		$_SESSION['status'] = "super admin";
		?>
			<script language="javascript">alert("Logging Successful");</script>
			<script>document.location.href='index.php';</script>
		<?php
	}
	else { ?>
			<script language="javascript">alert("Logging Unsuccessful");</script>
			<script>document.location.href='signin.php';</script>
	<?php }
	mysqli_close($conn);
?>
