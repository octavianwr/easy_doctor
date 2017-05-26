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
      <a class='active' href="index.php">Homepage</a>
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
