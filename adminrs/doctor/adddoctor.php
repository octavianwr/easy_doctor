<?php //FORMULIR TAMBAH DOKTER YOO ?>
<?php
  include '../../connect.php';
  if($_SESSION['id_hospital']=="nouser"){
  ?>
  <script language="javascript">alert("Anda belum login");</script>
  <script>document.location.href='signin.php';</script>
  <?php }
  if (isset($_SESSION['id_hospital'])) {
    $id_hospital = $_SESSION['id_hospital'];
  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>edit profile</title>
  </head>
  <body>
    <?php
      $query = mysqli_query($connect, "SELECT * FROM admin_rs WHERE id_hospital = '$id_hospital'");
      $result = mysqli_fetch_array($query);
    ?>
            <form action="adddoctor_process.php" method="post">
              Nama Lengkap Dokter<br>
              <input type="text" name="name" id="name">
              <br>Email<br>
              <input  type="email" name="email" id="email">
              <br>Nomor Telpon <br>
              <input type="number" pattern="[0-9]{10}{11}{12}{13}" name="phonenumber" id="phonenumber">
              <br><br><span>Unggah Foto Dokter</span><br>
              <input type="file" accept="image/x-png,image/gif,image/jpeg" name="photo">
               <br>
              <td>Provinsi</td>
              <br>
              <td>
                  <select name="spesialisasi" id="spesialisasi">
                  <?php
                    $result_specialization = mysqli_query($connect, "SELECT * FROM specialization");
                    while($row = mysqli_fetch_array($result_specialization))
                    {
                  ?>      
                    <option value="<?php echo $row['id_specialization']?>"><?php echo $row['specialization_name']; ?></option>
                  <?php
                    }
                  ?>
                  </select>
              </td>
             </tr>
             <br>
              <p>
              <input type="checkbox" id="admin_rs" required/>
              <label for="test5">Saya menyetujui Penamban Dokter</label>
              </p>
              <br><button class="btn waves-effect waves-teal" type="submit" name="su" >SUBMIT</button>
              </form>
              <form class="" action="index.php" method="post">
                <button type="submit" name="button">BATAL</button>
              </form>
  </body>
</html>
<?php } ?>
