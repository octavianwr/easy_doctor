<!DOCTYPE html>
<html>
<head>
 <title>Search</title>
</head>
<body>
 
<?php

include('../config.php');

?>

<form name='form1' method='post' id='form_combo'>

pilih provinsi : <select name=’provinsi’>

<option>pilih provinsi</option>

<?php

$prov = mysql_query($connect, "SELECT provinces FROM indonesia order by id asc");

while($hasil = mysql_fetch_array($prov)){

echo "<option value=$hasil[id]>$hasil[prov]</option>";

}

?>

</select>

<br/>

pilih kota : <select name='kota'>

<option>pilih kota</option>

</select>

</form>


</body>
</html>