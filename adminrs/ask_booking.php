<?php
  include '../connect.php';
  //require 'header.php';
  if($_SESSION['id_hospital']=="nouser"){
?>
<script>document.location.href='signin.php';</script>
  <?php }

  if($_SESSION['id_hospital']!="nouser"){
    $status = "MENUNGGU";
    $id_hospital = $_SESSION['id_hospital'];
    $query_booking = mysqli_query($connect, "SELECT * FROM booking WHERE id_hospital = '$id_hospital' AND status = '$status'");
    $query_rs = mysqli_query($connect, "SELECT * FROM admin_rs WHERE id_hospital = '$id_hospital'");
    $result_rs = mysqli_fetch_array($query_rs);
  //  $booking =  mysqli_fetch_array($query_booking);
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

.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
    text-align: center;
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
        <a href="profile.php">Profile</a>
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
        <a href = "ask_booking.php" class='active' >Permintaan Booking</a>
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


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
	<div class="row">


        <div class="col-md-12">
        <h4>Jadwal Saya</h4>
        <div class="table-responsive">


              <table id="mytable" class="table table-bordred table-striped">

                   <thead>

                     <th>No</th>
                     <th>Nama Pasien</th>
                     <th>No Telp</th>
                     <th>Nama Dokter</th>
                     <th>Tanggal</th>
                     <th>Jam</th>
  					         <th>Status</th>
                   </thead>
    <tbody>
      <?php
      // PERLU DIGANTI UNTUK TANGGAL DAN JAM NYA!!!!!!!!!!
      $count = 1;
      while($result_booking = mysqli_fetch_array($query_booking)){
        $id_pasien = $result_booking['id_patient'];
        $query_p = mysqli_query($connect, "SELECT phone_number FROM patient WHERE id_patient = '$id_pasien'");
        $list_p =  mysqli_fetch_array($query_p);
        $id_dokter = $result_booking['id_doctor'];
        $_SESSION['id_patient'] = $id_pasien;
        $_SESSION['id_doctor'] = $id_dokter;
        echo
        '<tr>
          <td>'.$count++.'</td>
          <td>'.$result_booking['name_patient'].'</td>
          <td>'.$list_p['phone_number'].'</td>
          <td>'.$result_booking['name_doctor'].'</td>
          <td>'.$result_booking['date_book'].'</td>
          <td>'.$result_booking['jam'].'</td>
          <td class="text-center"><a class="btn btn-success btn-xs" href="terima_pasien.php">Yes</a> <a href="tolak_pasien.php" class="btn btn-danger btn-xs"> No</a></td>

        </tr>';
      }
      ?>
    </tbody>

</table>

<div class="clearfix"></div>


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
  <div class="modal" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Mohsin">
        </div>
        <div class="form-group">

        <input class="form-control " type="text" placeholder="Irshad">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>


        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content -->
  </div>
      <!-- /.modal-dialog -->
    </div>



    <div class="modal" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">

       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content -->
  </div>
      <!-- /.modal-dialog -->
    </div>
</body>
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
<script type="text/javascript" src="../js/jadwalsaya.js"></script>

<!-- Javascripts
    ================================================== -->
<script type="text/javascript" src="../js/main.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="../js/index.js"></script>
<script src="../slider/js/index.js"></script>
</body>
</html>
