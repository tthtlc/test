<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
SANITIZE : use in_array to check if $tainted is in the white list
construction : concatenation with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$legal_table = array("safe1", "safe2");
if (in_array($tainted, $legal_table, true)) {
  $tainted = $tainted;
} else {
  $tainted = $legal_table[0];
}
$var = header("Location: pages/'". $tainted . "'.php");
?>