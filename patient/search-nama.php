<?php
include "../config.php";
if(isset($_POST['nama']) && isset($_POST['spesialisasi']))
{
  $nama = $_POST['nama'];
  $spesialisasi = $_POST['spesialisasi'];
  if(!empty($nama) && !empty($spesialisasi))
    $query = "SELECT  specialization_name, hospital_name, street, phone_number, doctor.name AS dname, regencies.name AS rname from admin_rs INNER JOIN doctor JOIN specialization ON doctor.hospital_id = admin_rs.id_hospital AND doctor.specialization_id = specialization.id_specialization WHERE (dname like '%$nama%') and (specialization_id = '$spesialisasi')";
  elseif (!empty($nama)) 
    $query = "SELECT  SELECT  specialization_name, hospital_name, street, phone_number, doctor.name AS dname, regencies.name AS rname from admin_rs INNER JOIN doctor JOIN specialization ON doctor.hospital_id = admin_rs.id_hospital AND doctor.specialization_id = specialization.id_specialization WHERE (dname like '%$nama%')";
  else
    $query = "SELECT  specialization_name, hospital_name, street, phone_number, doctor.name AS dname, regencies.name AS rname from admin_rs INNER JOIN doctor JOIN specialization ON doctor.hospital_id = admin_rs.id_hospital AND doctor.specialization_id = specialization.id_specialization WHERE (specialization_id = '$spesialisasi')";
  
  $result = mysqli_query($koneksi, $query);
}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Search</title>
</head>
<body>
 <h2>Search</h2>

  <table cellpadding="3" cellspacing="0">
   <form action="search-nama.php" method="POST">

    <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama" size="20"></td>
   </tr>

   <tr>
    <td>Spesialisasi</td>
    <td>:</td>
    <td>
      <select  name="spesialisasi">
        <option value="" >...</option>
        <?php
          $query_spec = "SELECT * from specialization";
          $result_spec = mysqli_query($koneksi, $query_spec);
          while($row_spec=mysqli_fetch_array($result_spec))
          {
            echo "<option value=\"" . $row_spec["id_specialization"] . "\">" . $row_spec["specialization_name"] . "</option>";
          }
        ?>
      </select>
    </td>
   </tr>
<tr>
  <td>
  <button type="submit" name="submit">SUBMIT</button>
  </td>
</tr>
</form>


  </table>
  <h3>Data Dokter</h3>
      <table cellpadding="6" cellspacing="0" border="1">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Spesialisasi</th>
        <th>Rumah Sakit</th>
        <th>Kota</th>
        <th>Alamat</th>
        <th>No. HP</th>   
      </tr>

 
      <?php
    

    if(isset($result))
    {
      $nomor = 1;
      while($row = mysqli_fetch_array($result))
      { ?>
      

      <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $row['dname']; ?></td>
        <td><?php echo $row['specialization_name']; ?></td>
        <td><?php echo $row['hospital_name']; ?></td>
        <td><?php echo $row['rname']; ?></td>
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