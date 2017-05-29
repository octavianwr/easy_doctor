<?php
  include 'connect.php';
  error_reporting(E_PARSE);
    $query_rs = mysqli_query($connect, "SELECT hospital_name, name, id_hospital, street,city FROM admin_rs, provinces where id=id_provinces order by hospital_name");

  if ($_SESSION['id_patient']!="nouser") {
    $id_patient = $_SESSION['id_patient'];
      $query = mysqli_query($connect, "SELECT * FROM patient where id_patient = '$id_patient'");
      $result = mysqli_fetch_array($query);
    }
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
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="shortcut icon" href="ico/cardiogram.png">
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" type="text/css"  href="css/animate.css">
<link rel="stylesheet" type="text/css"  href="css/animate.min.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>

</head>





</head>

<body>

  <div class='wrapper'>
  <div class='sidebar'>
    <div class='title'>
      <img src="ico/cardiogram.png" width="50" height="50" align="middle" ><br>
Easy Doctor
    </div>

    <?php
      if ($_SESSION['id_patient']!="nouser") { ?>
        <div class="profile clearfix">
                   <div class="profile_pic">
                     <img src="../images/img.jpg" alt="..." class="img-circle profile_img">
                   </div>
                   <div class="profile_info">
                     <span>Selamat Datang,</span>
                     <h2	><?php echo $result['username']; ?></h2>
                   </div>
                 </div>
      <?php } ?>


    <ul class='nav'>

      <li>
        <a  href="index.php">Homepage</a>
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
							<li class="page-scroll" class="fa fa-star" aria-hidden="true"> <a href="#garda4">Anak & Bayi</a></li>
							<li class="page-scroll" class="fa fa-star" aria-hidden="true"> <a href="#garda5">Penyakit Pencernaan</a></li>
							<li class="page-scroll"> <a href="#garda5">Telinga, Hidung & Tenggorokan</a></li>
							<li class="page-scroll"> <a href="#garda5">Operasi Umum</a></li>
							<li class="page-scroll"> <a href="#garda5">Hati</a></li>
							<li class="page-scroll"> <a href="#garda5">Pengobatan Internal</a></li>
							<li class="page-scroll"> <a href="#garda5">Operasi plastik</a></li>

						</ul>
      </li>

      <?php if($_SESSION['id_patient']!="nouser") { ?>
        <li>
          <a href="patient/profile.php">Profile</a>
        </li>
        <li>
            <a href="patient/jadwalsaya.php">Jadwal Saya</a>
          </li>
        <?php } ?>

      <li style="list-style-type:'\f08b'">
        <a class='active' href = "listrs.php">List Rumah Sakit</a>
      </li>
      <li>
        <a>Kontak</a>
      </li>

      <?php if ($_SESSION['id_patient']!="nouser") { ?>
        <li style="list-style-type:'\f08b'">
          <a href = "patient/signout.php">Logout</a>
        </li>
      <?php } ?>

      <?php if($_SESSION['id_patient']=="nouser") { ?>
      <li>
        <a href="signin.php">Login</a>
      </li>
      <?php } ?>

    </ul>
  </div>





  <div class='content isOpen'>
    <a class='button'></a>
  <div class="intro-body">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <h4>List Rumah Sakit</h4>
        <div class="table-responsive">


              <table id="mytable" class="table table-bordred table-striped">

                   <thead>

                   <th>No</th>
                   <th>Rumah Sakit</th>
                    <th>Alamat</th>

					   <th>Status</th>
                   </thead>
    <tbody>


      <?php
      	$count = 1;
      	while($result_rs = mysqli_fetch_array($query_rs)){
          echo
      		'<tr>
      			<td>'.$count++.'</td>
      			<td>'.$result_rs['hospital_name'].'</td>
      			<td>Jalan '.$result_rs['street'].', Kota '.$result_rs['city'].', Provinsi '.$result_rs['name'].'</td>
      			<td><a href="see_doctor.php?id='.$result_rs['id_hospital'].'"><button type="button" class="btn btn-primary">lihat jadwal dokter</button></td>
      		   </tr>';
      	}
      ?>
    </tbody>

</table>

          </div>
      </div>
  </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/jquery.parallax.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="js/contact_me.js"></script>

<!-- Javascripts
    ================================================== -->
<script type="text/javascript" src="js/main.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
<script src="slider/js/index.js"></script>
</body>
</html>
