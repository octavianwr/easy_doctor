<?php
	include "connect.php";
  if($_SESSION['id_hospital']=="nouser"){
  ?>
  <script language="javascript">alert("Anda belum login");</script>
  <script>document.location.href='../signin.php';</script>
  <?php }


  $nama = $_POST['name'];
  $email = $_POST['email'];
  $tlp = $_POST['phonenumber'];
  $id_hospital = $_SESSION['id_hospital'];

    $sql_tambah = "INSERT INTO doctor(id_doctor, name, email, phone_number_doc, id_hospital) VALUES ('','$nama', '$email', '$tlp', '$id_hospital')";
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
