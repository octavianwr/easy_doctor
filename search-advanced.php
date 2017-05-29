<?php
include "connect.php";
  if(isset($_GET['provinsi'])){
    $provinsi = $_GET['provinsi'];
  }
  if(isset($_GET['nama_rs'])){
    $hospital = $_GET['nama_rs'];
  }
  if(isset($_GET['provinsi']) && ($_POST['nama_rs'])){
    $query = "SELECT * from admin_rs WHERE (hospital_name like '%$nama_rs%') and (id_provinces = '$provinsi')";
  }
else if(isset($_POST['nama_rs'])&&($_POST['provinsi']=="")){
   $query = "SELECT * from doctor WHERE (hospital_name like '%$nama_rs%')";
}
else if(isset($_POST['provinsi'])&&($_POST['nama_rs']=="")){
    $query = "SELECT * from doctor WHERE (id_provinces = '$provinsi')";
}

$result = mysqli_query($connect, $query);


?>

<!DOCTYPE html>
<html>
<head>
 <title>Search</title>
</head>
<body>
 <h2>Search</h2>

  <table cellpadding="3" cellspacing="0">

      <form action="search-advanced.php" method="GET">
        <tr>
        <td>Rumah Sakit</td>
        <td>:</td>
        <td><input type="text" name="nama_rs" size="20"></td>
       </tr>

       <tr>
        <td>Provinsi</td>
        <td>:</td>
        <td>
        <select name="provinsi">
        <?php
          $id_spec = mysqli_query($connect, "SELECT * FROM specialization");
          while($list_spec = mysqli_fetch_array($id_spec))
          {
        ?>
          <option value="<?php echo $list_spec['id_specialization']?>"><?php echo $list_spec['specialization_name']; ?></option>
        <?php
          }
        ?>
        </select>
        <button type="submit">GO</button>
      </form>
    </td>
   </tr>


  <?php
    if(isset($provinsi))
    {
  ?>
  <form action="search-advanced.php" method="POST">
  <tr>
    <td>Kota</td>
    <td>:</td>
    <td>
    <select name="kota">
      <?php
        $result_patient = mysqli_query($koneksi, "SELECT * FROM regencies WHERE province_id = '$provinsi'");
        while($row = mysqli_fetch_array($result_patient))
        {
      ?>
        <option value="<?php echo $row['id']?>"><?php echo $row['name']; ?></option>
      <?php
        }
      ?>
      </select>
      </td>
   </tr>

   <tr>
    <td>
    <button type="submit" name="submit2">SUBMIT</button>
    </td>
  </tr>
   </form>
  </table>


  <?php
    }
    if(isset($result))
    {
      $nomor = 1;
      while($row = mysqli_fetch_array($result))
      { ?>
      <h3>Data Dokter</h3>
      <table border="1" class="table">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Spesialisasi</th>
        <th>Rumah Sakit</th>
        <th>Kota</th>
        <th>Alamat</th>
        <th>No. HP</th>
      </tr>

      <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $row['d.name']; ?></td>
        <td><?php echo $row['specialization_name']; ?></td>
        <td><?php echo $row['hospital_name']; ?></td>
        <td><?php echo $row['r.name']; ?></td>
        <td><?php echo $row['street']; ?></td>
        <td><?php echo $row['phone_number']; ?></td>
      </tr>
      <?php
      }
    }
  ?>
  </table>
</body>
</html>
