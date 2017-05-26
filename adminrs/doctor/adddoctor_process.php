<?php
	include "connect.php";
  if($_SESSION['id_hospital']=="nouser"){
  ?>
  <script>document.location.href='../signin.php';</script>
  <?php }

	$query_ahli = mysqli_query($connect, "SELECT * FROM specialization");
	$id_ahli = mysqli_fetch_array($query_ahli);

	$jam = "08:00 s.d 16:00 WIB";
  $nama = $_POST['name'];
  $email = $_POST['email'];
  $tlp = $_POST['phonenumber'];
	$spesialisasi = $_POST['spesialisasi'];
  $id_hospital = $_SESSION['id_hospital'];

	echo $spesialisasi;

    $sql_tambah = "INSERT INTO doctor(id_doctor, name, email, phone_number_doc, id_hospital, jam, id_specialization) VALUES ('','$nama', '$email', '$tlp', '$id_hospital', '$jam', '$spesialisasi')";
    $tambah = mysqli_query($connect,$sql_tambah);

		if($tambah){
	?>
		<script language="javascript">alert("Register Successful");</script>
			<script>document.location.href='listdoctor.php';</script>
	<?php
	} else {
		?>
		<script language="javascript">alert("Register Failed");</script>
			<script>document.location.href='adddoctor.php';</script>
	<?php
	}
mysqli_close($connect);
?>
