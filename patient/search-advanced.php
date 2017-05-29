<?php
include "../config.php";
  if(isset($_GET['provinsi']))
  {
    $provinsi = $_GET['provinsi'];  
    $ambil_dokter = mysqli_query($koneksi, "SELECT  specialization_name, hospital_name, street, phone_number, doctor.name AS dname, regencies.name AS rname from admin_rs INNER JOIN doctor JOIN specialization ON doctor.hospital_id = admin_rs.id_hospital AND doctor.specialization_id = specialization.id_specialization  WHERE id_provinces = '$provinsi' ");
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
   
   <tr>
    <td>Provinsi</td>
    <td>:</td>
    <td>
      <form action="search-advanced.php" method="GET">
        <select name="provinsi">
        <?php
          $result_patient = mysqli_query($koneksi, "SELECT * FROM provinces");
          while($row = mysqli_fetch_array($result_patient))
          {
        ?>      
          <option value="<?php echo $row['id']?>"><?php echo $row['name']; ?></option>
        <?php
          }
        ?>
        </select>
        <button type="submit">GO</button>
      </form>
    </td>
   </tr>
   
   
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
    
    if(mysqli_num_rows($result_patient) == 0){
      ?>
      <tr><td colspan="6">Tidak ada data!</td></tr>
      <?php
    }

    else if(isset($ambil_dokter))
    {
      $nomor = 1;
      while($row = mysqli_fetch_array($ambil_dokter))
      { ?>
      

      <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $row['dname']; ?></td>
        <td><?php echo $row['specialization_name']; ?></td>
        <td><?php echo $row['hospital_name']; ?></td>
        <td><?php echo $row['kota']; ?></td>
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