<!-- 
Unsafe sample
input : get the $_GET['userData'] in an array
Flushes content of $sanitized if the filter number_float_filter is not applied
File : unsafe, use of untrusted data in an attribute name
-->
<!DOCTYPE html>
<html>
<body>
<?php
$array = array();
$array[] = 'safe' ;
$array[] = $_GET['userData'] ;
$array[] = 'safe' ;
$tainted = $array[1] ;
if (filter_var($sanitized, FILTER_VALIDATE_FLOAT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
//flaw
echo "<div ". $tainted ."= bob />" ;
?>
<h1>Hello World!</h1>
</div>
</body>
</html>