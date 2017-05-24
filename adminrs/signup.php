<?php
  include '../config.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrasi Admin</title>
  </head>
  <body>
    <h4>Registrasi Admin Rumah Sakit</h4>
    <form class ="col s12" name="uploader" action="signup_process.php" method="POST" enctype="multipart/form-data">
      Nama Rumah Sakit<br>
      <input type="text" name="name" id="name" required>
      <br>username <br>
      <input type="text" name="username" id="username" required>
      <br>email<br>
      <input  type="email" name="email" id="email" required>
      <br>password <br>
      <input type="password" name="pass" id="pass" min="6" required>
      <br>No. Telepon <br>
      <input type="text" pattern="[0-9]{10}{11}{12}{13}" name="phonenumber" id="phonenumber" required>
      <tr>
    <br>
    <td>Provinsi</td>
    <br>
    <td>
        <select name="prov" id="prov">
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
    </td>
   </tr>
   <br>

  <tr>
    <td>Kota</td>
    <br>
    <td>
    <select name="city" id="city">
      <?php
        $result_patient = mysqli_query($koneksi, "SELECT * FROM regencies ");
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

   </table>
      <br>jalan <br>
      <input type="text" name="street" id="street" required>
      <br><span>Unggah Foto Profil</span><br>
      <input type="file" accept="image/x-png,image/gif,image/jpeg" name="photo">
      <p>
      <input type="checkbox" id="admin_rs" required/>
      <label for="test5">Saya Setuju</label>
      </p>
      <br><button class="btn waves-effect waves-teal" type="submit" >Submit</button>
    </form>

      <table cellpadding="3" cellspacing="0">
   
  </body>
</html>