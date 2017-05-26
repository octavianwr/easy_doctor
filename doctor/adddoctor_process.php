<?php
	include "connect.php";
  	
  	if($_SESSION['id_hospital']=="nouser")
  	{
?>
	<script language="javascript">alert("Anda belum login");</script>
  	<script>document.location.href='../signin.php';</script>
<?php
	}

	$nama = $_POST['name'];
	$email = $_POST['email'];
	$tlp = $_POST['phonenumber'];
	$spesialisasi = $_POST['spesialisasi'];
	$id_hospital = $_SESSION['id_hospital'];

    $sql_tambah = "INSERT INTO doctor(name, email, phone_number_doc, specialization_id, hospital_id) VALUES ('$nama', '$email', '$tlp',  '$spesialisasi', '$id_hospital')";
    $queryStatus = mysqli_query($connect,$sql_tambah);

    if($queryStatus)
    {
?>
	<script language="javascript">alert("Register Successful");</script>
	<script>document.location.href='../index.php';</script>
<?php
    }
    else
    {
?>
	<script language="javascript">alert("Register Failed");</script>
	<script>document.location.href='signup.php';</script>
<?php
    }
	mysqli_close($connect);
?>
