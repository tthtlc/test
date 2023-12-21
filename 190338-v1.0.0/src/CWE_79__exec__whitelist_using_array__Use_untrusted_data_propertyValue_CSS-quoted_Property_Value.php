<!-- 
Unsafe sample
input : use exec to execute the script /tmp/tainted.php and store the output in $tainted
SANITIZE : use in_array to check if $tainted is in the white list
File : unsafe, use of untrusted data in a quoted property value (CSS)
-->
<!DOCTYPE html>
<html>
<head>
<style>
<?php
$script = "/tmp/tainted.php";
exec($script, $result, $return);
$tainted = $result[0];
$legal_table = array("safe1", "safe2");
if (in_array($tainted, $legal_table, true)) {
  $tainted = $tainted;
} else {
  $tainted = $legal_table[0];
}
//flaw
echo "body { color :\'". $tainted ."\' ; }" ;
?>
</style> 
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>