<!DOCTYPE html>
<?php
	include "../../connect.php";
  if (isset($_SESSION['id_hospital'])) {
    $id_hospital = $_SESSION['id_hospital'];
	$query = mysqli_query($connect, "SELECT * FROM doctor where id_hospital = '$id_hospital'");
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List Data</title>
</head>
<body>
	<center>
		<h1>Daftar Dokter</h1><br><br>
	</center>
	<div style="width: 80%; margin: auto;">
	<table class="table centered">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Email</th>
	</tr>
<?php
	$count = 1;
	while($result = mysqli_fetch_array($query)){
		echo
		'<tr>
			<td>'.$count++.'</td>
			<td>'.$result['name'].'</td>
			<td>'.$result['email'].'</td>
			<td><a href="edit.php?id='.$result['id_doctor'].'"><button type="button" class="btn btn-primary">Edit</button></td>
			<td><a href="deletedoctor.php?id='.$result['id_doctor'].'" button type="button" class="btn btn-danger">Delete</button></td>
		</tr>';
	}
}
?>
	</table>
	</div>
</body>
</html>
