<!-- 
Safe sample
input : reads the field UserData from the variable $_GET
sanitize : settype (float)
File : use of untrusted data in a div tag
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<div>
<?php
$tainted = $_GET['UserData'];
if(settype($tainted, "float"))
  $tainted = $tainted ;
else
  $tainted = 0.0 ;
echo $tainted ;
?>
</div>
<h1>Hello World!</h1>
</body>
</html>