
<!DOCTYPE html>
<html>
<body>

<?php
$d1=strtotime("July 05");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of July.";
?>

</body>
</html>

<?php
  //date in mm/dd/yyyy format; or it can be in other formats as well
  $birthDate = "12/17/1983";
  //explode the date to get month, day and year
  $birthDate = explode("/", $birthDate);
  //get age from date or birthdate
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
  echo "Age is:" . $age;
?>
