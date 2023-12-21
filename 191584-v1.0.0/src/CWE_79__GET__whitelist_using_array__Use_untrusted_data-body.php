<!-- 
Unsafe sample
input : reads the field UserData from the variable $_GET
SANITIZE : use in_array to check if $tainted is in the white list
File : use of untrusted data in the body
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = $_GET['UserData'];
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
