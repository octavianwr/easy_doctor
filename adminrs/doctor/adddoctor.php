<?php
  include '../../connect.php';
  if($_SESSION['id_hospital']=="nouser"){
  ?>
  <script>document.location.href='../signin.php';</script>
  <?php }
  if (isset($_SESSION['id_hospital'])) {
    $id_hospital = $_SESSION['id_hospital'];
    $query_rs = mysqli_query($connect, "SELECT * FROM admin_rs WHERE id_hospital = '$id_hospital'");
    $result_rs = mysqli_fetch_array($query_rs);
  ?>
<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>EasyDoctor</title>
   <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      body { background: #fff; }
#slidy-container {
  width: 100%; overflow: hidden; margin: 0 auto;
}
    </style>

<meta name="description" content="Cari Dokter">
<meta name="author" content="Cari Dokter">
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="../../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../../fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="shortcut icon" href="../../ico/cardiogram.png">
<link rel="stylesheet" type="text/css"  href="../../css/profile.css">
<link rel="stylesheet" href="../../css/style3.css">
<link rel="stylesheet" type="text/css"  href="../../css/animate.css">
<link rel="stylesheet" type="text/css"  href="../../css/animate.min.css">
<link rel="stylesheet" type="text/css" href="../../css/prettyPhoto.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="../../js/modernizr.custom.js"></script>

</head>





</head>

<body>

  <div class='wrapper'>
  <div class='sidebar'>
    <div class='title'>
      <img src="../../ico/cardiogram.png" width="50" height="50" align="middle" ><br>
Easy Doctor
    </div>
	 <?php include '../welcomeadmin.php' ?>
    <ul class='nav'>
      <li>
        <a href="../index.php">Homepage</a>
      </li>
            <li>
        <a>Cari Dokter</a>
      </li>
      <li class="dropdown">
        <a a href="#" class="dropdown-toggle" data-toggle="dropdown">Spesialisasi</a>
		<ul class="dropdown-menu">
							<li class="page-scroll"> <a href="#garda1">Mata</a></li>
							<li class="page-scroll"> <a href="#garda2">Tulang & Sendi</a></li>
							<li class="page-scroll"> <a href="#garda3">Kanker</a></li>
							<li class="page-scroll"> <a href="#garda4">Anak & Bayi</a></li>
							<li class="page-scroll"> <a href="#garda5">Penyakit Pencernaan</a></li>
							<li class="page-scroll"> <a href="#garda5">Telinga, Hidung & Tenggorokan</a></li>
							<li class="page-scroll"> <a href="#garda5">Operasi Umum</a></li>
							<li class="page-scroll"> <a href="#garda5">Hati</a></li>
							<li class="page-scroll"> <a href="#garda5">Pengobatan Internal</a></li>
							<li class="page-scroll"> <a href="#garda5">Kesehatan Pria</a></li>
							<li class="page-scroll"> <a href="#garda5">Kesehatan Wanita</a></li>
							<li class="page-scroll"> <a href="#garda5">Ilmu Saraf</a></li>
							<li class="page-scroll"> <a href="#garda5">Operasi plastik</a></li>
							<li class="page-scroll"> <a href="#garda5">Kulit</a></li>

						</ul>
      </li>
      <li>
        <a href="../profile.php">Profile</a>
      </li>
	  <li>
        <a class="active" href="adddoctor.php">Tambah Dokter</a>
      </li>
      <li style="list-style-type:'\f08b'">
        <a href = "listdoctor.php">List Dokter <?php echo $result_rs['hospital_name']; ?></a>
      </li>
      <li style="list-style-type:'\f08b'">
        <a href = "../daftar_pasien.php">Daftar Pasien</a>
      </li>
      <li style="list-style-type:'\f08b'">
        <a href = "../ask_booking.php">Permintaan Booking</a>
      </li>
      <li>
        <a>Kontak</a>
      </li>
      <li style="list-style-type:'\f08b'">
        <a href = "../signout.php">Logout</a>
      </li>
    </ul>
  </div>




  <div class='content isOpen'>
    <a class='button'></a>


<div class="container">
<form class="form-horizontal" action="adddoctor_process.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Tambah Dokter</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nama Lengkap Dokter</label>
  <div class="col-md-4">
  <input id="textinput" name="name" type="text" placeholder="Nama Lengkap Dokter" class="form-control input-md" required>

  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" for="Email Address">Email</label>
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
     <i class="fa fa-envelope-o"></i>

       </div>

       <input id="Email Address" name="email" type="text" placeholder="Email" class="form-control input-md" required>
  </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Phone number ">Nomor Telepon</label>
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
         <i class="fa fa-phone"></i>
       </div>
    <input id="Phone number " name="phonenumber" type="text" placeholder="Nomor Telepon Dokter" class="form-control input-md" required>
  </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Phone number ">Spesialisasi Dokter</label>
  <div class="col-md-4">
  <div class="input-group">
       <select name="spesialisasi" class="">

               <option value="1" >Mata</option>

               <option value="2" >Tulang & Sendi</option>

               <option value="3" >Kanker</option>

               <option value="4" >Anak & Bayi</option>

               <option value="5" >Penyakit Pencernaan</option>

               <option value="6" >Telinga, Hidung & Tenggorokan</option>

               <option value="7" >Operasi Umum</option>

               <option value="8" >Hati</option>

               <option value="9" >Pengobatan Internal</option>

               <option value="10">Operasi Plastik</option>
       </select>
  </div>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" class="btn btn-primary" href="adddoctor_process.php">submit</button>
  </div>
</div>
</fieldset>
</form>

</div>

	<div id="footer">
  <div class="container">
    <p>Copyright &copy; Easy Doctor. Designed by <a href="#" rel="nofollow">Easy Doctor</a></p>
  </div>
</div>
</div>
  </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="../../js/jquery.1.11.1.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="../../js/bootstrap.js"></script>
<script type="text/javascript" src="../../js/SmoothScroll.js"></script>
<script type="text/javascript" src="../../js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="../../js/jquery.isotope.js"></script>
<script type="text/javascript" src="../../js/jquery.parallax.js"></script>
<script type="text/javascript" src="../../js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="../../js/contact_me.js"></script>

<!-- Javascripts
    ================================================== -->
<script type="text/javascript" src="../../js/main.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="../../js/index.js"></script>
<script src="../../slider/js/index.js"></script>
</body>
</html>
<?php } ?>
