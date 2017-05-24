<?php
include "../config.php";
if(isset($_POST['nama']) && isset($_POST['spesialisasi']))
{
  $nama = $_POST['nama'];
  $spesialisasi = $_POST['spesialisasi'];
  if(!empty($nama) && !empty($spesialisasi))
    $query = "SELECT * from doctor WHERE (name like '%$nama%') and (specialization_id = '$spesialisasi')";
  elseif (!empty($nama)) 
    $query = "SELECT * from doctor WHERE name like '%$nama%'";
  else
    $query = "SELECT * from doctor WHERE (specialization_id = '$spesialisasi')";
  
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
  <?php
    if(isset($result))
    {
      while($row=mysqli_fetch_array($result))
        echo $row['name'] . "<br>";
    }

  ?>
</body>
</html>