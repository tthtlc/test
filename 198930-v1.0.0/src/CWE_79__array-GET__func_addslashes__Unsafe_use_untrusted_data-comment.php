<!-- 
Unsafe sample
input : get the $_GET['userData'] in an array
sanitize : use of the function addslashes
File : unsafe, use of untrusted data in a comment
-->
<!DOCTYPE html>
<html>
<head>
<!--
<?php
$array = array();
$array[] = 'safe' ;
$array[] = $_GET['userData'] ;
$array[] = 'safe' ;
$tainted = $array[1] ;
$tainted = addslashes($tainted);
//flaw
echo $tainted ;
?>
-->
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>