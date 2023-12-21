<!-- 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : settype (float)
File : use of untrusted data in the body
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = `cat /tmp/tainted.txt`;
if(settype($tainted, "float"))
  $tainted = $tainted ;
else
  $tainted = 0.0 ;
echo $tainted ;
?>
<h1>Hello World!</h1>
</body>
</html>
