<?php
	include '../connect.php';

if(isset($_SESSION['user'])!=""){
  header("location:index.php");
  exit;
}
	$email = $_POST['email'];
	$password = $_POST['pass'];

	$result_patient = mysqli_query($connect, "SELECT * FROM patient WHERE email='$email' and password='$password'");
	$row = mysqli_fetch_array($result_patient, MYSQLI_ASSOC);
	if($row) {
		$_SESSION['id_patient'] = $row['id_patient'];
		$_SESSION['status'] = "patient";
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
