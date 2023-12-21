<!-- 
Unsafe sample
input : get the $_GET['userData'] in an array
sanitize : use of ternary condition
File : use of untrusted data in a double quoted event handler in a script
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
$tainted = $tainted  == 'safe1' ? 'safe1' : 'safe2';
//flaw
echo "<div onmouseover=\"x=\"". $tainted ."\"\>";
?>
<h1>Hello World!</h1>
</div>
</body>
</html>