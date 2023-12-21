<!-- 
Unsafe sample
input : use exec to execute the script /tmp/tainted.php and store the output in $tainted
SANITIZE : use in_array to check if $tainted is in the white list
File : use of untrusted data in a doubled quote attribute
-->
<!DOCTYPE html>
<html>
<head/>
<body>
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
echo "<div id=\"". $tainted ."\">content</div>" ;
?>
<h1>Hello World!</h1>
</body>
</html>