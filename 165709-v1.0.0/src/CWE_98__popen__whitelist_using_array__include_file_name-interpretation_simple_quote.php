<?php
/* 
Safe sample
input : Uses popen to read the file /tmp/tainted.txt using cat command
SANITIZE : use in_array to check if $tainted is in the white list
construction : interpretation with simple quote
*/
$handle = popen('/bin/cat /tmp/tainted.txt', 'r');
$tainted = fread($handle, 4096);
pclose($handle);
$legal_table = array("safe1", "safe2");
if (in_array($tainted, $legal_table, true)) {
  $tainted = $tainted;
} else {
  $tainted = $legal_table[0];
}
$var = include("'$tainted'.php");
?>