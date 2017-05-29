<?php
include "connect.php";
if(isset($_POST['nama'])) $nama = $_POST['nama'];
if(isset($_POST['spesialisasi'])) $id_spec = $_POST['spesialisasi'];
if(isset($_POST['provinsi'])) $id_prov = $_POST['provinsi'];

if($_POST){
    $result = mysqli_query($connect,"SELECT * from doctor, admin_rs WHERE (name_doctor like '%$nama%') or (specialization_id = '$id_spec') or (id_provinces = '$id_prov')");
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
        <option value="" >Pilih Spesialisasi</option>
        <?php
          $query_spec = "SELECT * from specialization";
          $result_spec = mysqli_query($connect, $query_spec);
          while($row_spec=mysqli_fetch_array($result_spec))
          { ?>
            <option value="<?php echo $row_spec['id_specialization']?>"><?php echo $row_spec['specialization_name']; ?></option>
          <?php }
        ?>
      </select>
    </td>
   </tr>

   <tr>
    <td>Provinsi</td>
    <td>:</td>
    <td>
      <select  name="provinsi">
        <option value="" >Pilih Provinsi</option>
        <?php
          $prov = mysqli_query($connect, "SELECT * FROM provinces");
          while($list_prov = mysqli_fetch_array($prov))
          {
        ?>
          <option value="<?php echo $list_prov['id']?>"><?php echo $list_prov['name']; ?></option>
        <?php
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

<?php
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
      <td><?php echo $row['name_doctor']; ?></td>
      <td><?php echo $row['specialization_id']; ?></td>
      <td><?php echo $row['hospital_name']; ?></td>
      <td><?php echo $row['city']; ?></td>
      <td><?php echo $row['street']; ?></td>
      <td><?php echo $row['phone_number_hos']; ?></td>
    </tr>
    <?php
    }
  }
?>
</table>
</body>
</html>
