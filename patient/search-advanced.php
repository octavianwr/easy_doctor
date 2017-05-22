<?php
include "../config.php";
  if(isset($_GET['provinsi']))
  {
    $provinsi = $_GET['provinsi'];  
  }
  
  if(isset($_POST['kota']))
  {
    $kota = $_POST['kota']
    if(!empty($kota))
    $query = "SELECT * from admin_rs WHERE city like '$kota'";
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
    <button type="submit" name="submit">SUBMIT</button>
    </td>
  </tr>
   </form>
  
  <?php
    }
  ?>
   
  <br>
  <?php
    if(isset($result))
    {
      while($row=mysqli_fetch_array($result))
        echo $row['name'] . "<br>";
    }
  ?>
  </table>
</body>
</html>