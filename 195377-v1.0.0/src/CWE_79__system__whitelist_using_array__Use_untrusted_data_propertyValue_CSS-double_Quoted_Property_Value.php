<!-- 
Unsafe sample
input : execute a ls command using the function system, and put the last result in $tainted
SANITIZE : use in_array to check if $tainted is in the white list
File : use of untrusted data in a double quoted property value (CSS)
-->
<!DOCTYPE html>
<html>
<head>
<style>
<?php
$tainted = system('ls', $retval);
$legal_table = array("safe1", "safe2");
if (in_array($tainted, $legal_table, true)) {
  $tainted = $tainted;
} else {
  $tainted = $legal_table[0];
}
//flaw
echo "body { color :\"". $tainted ."\" ; }" ;
?>
</style> 
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>