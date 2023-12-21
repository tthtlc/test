<!-- 
Safe sample
input : reads the field UserData from the variable $_GET
sanitize : use of settype_int
File : use of untrusted data in the body
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = $_GET['UserData'];
if (settype($tainted, "integer"))
  $tainted = $tainted ;
else
  $tainted = 0 ;
echo $tainted ;
?>
<h1>Hello World!</h1>
</body>
</html>
