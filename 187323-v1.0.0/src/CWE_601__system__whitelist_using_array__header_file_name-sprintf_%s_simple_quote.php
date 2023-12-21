<?php
/* 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
SANITIZE : use in_array to check if $tainted is in the white list
construction : use of sprintf via a %s with simple quote
*/
$tainted = system('ls', $retval);
$legal_table = array("safe1", "safe2");
if (in_array($tainted, $legal_table, true)) {
  $tainted = $tainted;
} else {
  $tainted = $legal_table[0];
}
$var = header(sprintf("Location: '%s'.php", $tainted));
?>