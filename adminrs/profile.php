<?php
include '../connect.php';

    if($_SESSION['id_hospital'] == "nouser"){
      ?>
      <script>document.location.href='signin.php';</script>
      <?php
    }
      if (isset($_SESSION['id_hospital'])) {
        $id_hospital = $_SESSION['id_hospital'];
        $query_rs = mysqli_query($connect, "SELECT * FROM admin_rs where id_hospital = '$id_hospital'");
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
                  <h2	>Admin <?php echo $result_rs['hospital_name']; ?></h2>
                </div>
              </div>
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
                <li class="page-scroll"> <a href="#garda4">Anak & Bayi</a></li>
                <li class="page-scroll"> <a href="#garda5">Penyakit Pencernaan</a></li>
                <li class="page-scroll"> <a href="#garda5">Telinga, Hidung & Tenggorokan</a></li>
                <li class="page-scroll"> <a href="#garda5">Operasi Umum</a></li>
                <li class="page-scroll"> <a href="#garda5">Hati</a></li>
                <li class="page-scroll"> <a href="#garda5">Pengobatan Internal</a></li>
                <li class="page-scroll"> <a href="#garda5">Operasi plastik</a></li>

              </ul>
        </li>
        <li>
          <a class='active' href="profile.php">Profile</a>
        </li>
      <li>
          <a href="doctor/adddoctor.php">Tambah Dokter</a>
        </li>
        <li style="list-style-type:'\f08b'">
          <a href = "doctor/listdoctor.php">List Dokter <?php echo $result_rs['hospital_name']; ?></a>
        </li>
        <li style="list-style-type:'\f08b'">
          <a href = "daftar_pasien.php">Daftar Pasien</a>
        </li>
        <li style="list-style-type:'\f08b'">
          <a href = "ask_booking.php">Permintaan Booking</a>
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
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">

       <br>
<p class=" text-info"><?php echo date("d-m-Y"); ?> </p>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $result_rs['hospital_name']; ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="img/content/hospital.png" class="img-circle img-responsive"> </div>

                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>

                      <form class="" action="changeprofile.php" method="post">
                        <img src="<?php echo $result_rs['photo_patient']?>" class="circle responsive-img" width="250" height="250" alt=""><br>
                        <tr>
                          <td>Rumah Sakit</td>
                          <td><?php echo $result_rs['hospital_name']?></td>
                        </tr>
                        <tr>
                          <tr>
                            <td>Direktur</td>
                            <td><?php echo $result_rs['direktur']?></td>
                          </tr>
                          <tr>
                        <tr>
                          <td>Username</td>
                          <td><?php echo $result_rs['username']?></td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td><?php echo $result_rs['email']?></td>
                        </tr>

                        <tr>
                          <td>No HP</td>
                          <td><?php echo $result_rs['phone_number']?></td>
                        </tr>

                        <tr>
                          <td>Alamat</td>
                          <td><?php echo "Jalan " .$result_rs['street'] .", Kota " .$result_rs['city'] .",Provinsi " .$result_rs['province']?></td>
                        </tr>
                      </form>


                    </tbody>
                  </table>


                  <a href="changeprofile.php" class="btn btn-primary" style="margin-left:100px">Edit Profil</a>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
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
