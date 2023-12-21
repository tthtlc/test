<!-- 
Safe sample
input : get the $_GET['userData'] in an array
SANITIZE : use of preg_replace
File : use of untrusted data in a quoted event handler in a script
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$array = array();
$array[] = 'safe' ;
$array[] = $_GET['userData'] ;
$array[] = 'safe' ;
$tainted = $array[1] ;
$tainted = preg_replace('/\'/', '', $tainted);
echo "<div onmouseover=\"x='". $tainted ."'\>";
?>
<h1>Hello World!</h1>
</div>
</body>
</html>