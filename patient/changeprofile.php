<?php
include '../connect.php';
if($_SESSION['id_patient']=="nouser" and $_SESSION['email']==""){
?>
<script>document.location.href='../index.php';</script>
<?php }
if (isset($_SESSION['id_patient']) or ($_SESSION['email'])) {
      $id_patient = $_GET['id'];
      $query = mysqli_query($connect, "SELECT * FROM patient where id_patient = '$id_patient'");
      $result = mysqli_fetch_array($query);
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
<link rel="stylesheet" type="text/css"  href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="shortcut icon" href="../ico/cardiogram.png">
<link rel="stylesheet" type="text/css"  href="../css/profile.css">
<link rel="stylesheet" href="../css/style3.css">
<link rel="stylesheet" type="text/css"  href="../css/animate.css">
<link rel="stylesheet" type="text/css"  href="../css/animate.min.css">
<link rel="stylesheet" type="text/css" href="../css/prettyPhoto.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="../js/modernizr.custom.js"></script>

</head>





</head>

<body>

  <div class='wrapper'>
  <div class='sidebar'>
    <div class='title'>
      <img src="../ico/cardiogram.png" width="50" height="50" align="middle" ><br>
Easy Doctor
    </div>
	 <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2	><?php echo $result['username']; ?></h2>
              </div>
            </div>
    <ul class='nav'>
      <li>
        <a href="index.php">Homepage</a>
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
        <a href="profile.php" class='active'>Profile</a>
      </li>
    <li>
        <a href="jadwalsaya.php">Jadwal Saya</a>
      </li>
      <li style="list-style-type:'\f08b'">
        <a href = "../listrs.php">List Rumah Sakit</a>
      </li>
      <li>
        <a>Kontak</a>
      </li>
      <li style="list-style-type:'\f08b'">
        <a href = "signout.php">Logout</a>
      </li>
    </ul>
  </div>




  <div class='content isOpen'>
    <a class='button'></a>
    <div class="container">
    <form class="form-horizontal" action="changeprofile_process.php?" method="post">
    <fieldset>

    <!-- Form Name -->
    <legend>Edit Profile</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Name (Full name)">Nama Lengkap</label>
      <div class="col-md-4">
     <div class="input-group">
           <div class="input-group-addon">
            <i class="fa fa-user">
            </i>
           </div>
           <input id="Name (Full name)" name="name" type="text" value="<?php echo $result['name']?>" class="form-control input-md">
          </div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="Name (Full name)">Username</label>
      <div class="col-md-4">
     <div class="input-group">
           <div class="input-group-addon">
            <i class="fa fa-user">
            </i>
           </div>
           <input id="Name (Full name)" name="username" type="text" value="<?php echo $result['username']?>" class="form-control input-md">
          </div>
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Date Of Birth">Tanggal Lahir <br> (yyyy/mm/dd)</label>
      <div class="col-md-4">

      <div class="input-group">
           <div class="input-group-addon">
         <i class="fa fa-birthday-cake"></i>

           </div>
           <input id="Date Of Birth" name="birth" type="text" value="<?php echo $result['birth_date']?>" class="form-control input-md">
          </div>


      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="Email Address">Email</label>
      <div class="col-md-4">
      <div class="input-group">
           <div class="input-group-addon">
         <i class="fa fa-envelope-o"></i>

           </div>
        <input id="Email Address" name="email" type="email" value="<?php echo $result['email']?>" class="form-control input-md">

          </div>

      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Password</label>
      <div class="col-md-4">
      <input id="textinput" name="pass" type="password" value="<?php echo $result['password']?>" class="form-control input-md">

      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="Phone number ">Nomor Handphone </label>
      <div class="col-md-4">
      <div class="input-group">
           <div class="input-group-addon">
         <i class="fa fa-phone"></i>

           </div>
        <input id="Phone number " name="phonenumber" type="text" value="<?php echo $result['phone_number']?>"	" class="form-control input-md">

          </div>


      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Alamat</label>
      <div class="col-md-4">
      <input id="textinput" name="address" type="text" value="<?php echo $result['address']?>" class="form-control input-md">

      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="singlebutton"></label>
      <div class="col-md-4">
        <button id="singlebutton" name="singlebutton" class="btn btn-primary" >submit</button>
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
<script type="text/javascript" src="../js/jquery.1.11.1.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/SmoothScroll.js"></script>
<script type="text/javascript" src="../js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="../js/jquery.isotope.js"></script>
<script type="text/javascript" src="../js/jquery.parallax.js"></script>
<script type="text/javascript" src="../js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="../js/contact_me.js"></script>

<!-- Javascripts
    ================================================== -->
<script type="text/javascript" src="../js/main.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="../js/index.js"></script>
<script src="../slider/js/index.js"></script>
</body>
</html>

<?php } ?>
