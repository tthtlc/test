<!-- 
Unsafe sample
input : execute a ls command using the function system, and put the last result in $tainted
SANITIZE : use in_array to check if $tainted is in the white list
File : use of untrusted data in the body
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = system('ls', $retval);
$legal_table = array("safe1", "safe2");
if (in_array($tainted, $legal_table, true)) {
  $tainted = $tainted;
} else {
  $tainted = $legal_table[0];
}
//flaw
echo $tainted ;
?>
<h1>Hello World!</h1>
</body>
</html>
