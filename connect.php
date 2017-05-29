<?php
	$connect = mysqli_connect("localhost", "root", "", "easy_doctor")
	or die ("Gagal koneksi ke server".mysqli_error());
	session_start();

	if(!(isset($_SESSION['id_hospital']))) {
		$_SESSION['id_hospital']="nouser";
	}

	if(!(isset($_SESSION['id_patient']))) {
		$_SESSION['id_patient']="nouser";
	}

	if(!(isset($_SESSION['id_admin']))) {
		$_SESSION['id_admin']="nouser";
	}
?>
