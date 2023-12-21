<!-- 
Safe sample
input : get the $_GET['userData'] in an array
sanitize : use of settype_int
File : unsafe, use of untrusted data in a quoted property value (CSS)
-->
<!DOCTYPE html>
<html>
<head>
<style>
<?php
$array = array();
$array[] = 'safe' ;
$array[] = $_GET['userData'] ;
$array[] = 'safe' ;
$tainted = $array[1] ;
if (settype($tainted, "integer"))
  $tainted = $tainted ;
else
  $tainted = 0 ;
echo "body { color :\'". $tainted ."\' ; }" ;
?>
</style> 
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>