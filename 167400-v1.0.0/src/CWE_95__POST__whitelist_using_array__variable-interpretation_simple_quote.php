<?php
/* 
Safe sample
input : get the field UserData from the variable $_POST
SANITIZE : use in_array to check if $tainted is in the white list
construction : interpretation with simple quote
*/
$tainted = $_POST['UserData'];
$legal_table = array("safe1", "safe2");
if (in_array($tainted, $legal_table, true)) {
  $tainted = $tainted;
} else {
  $tainted = $legal_table[0];
}
$query = "$temp = ' $tainted ';";
$res = eval($query);
?>