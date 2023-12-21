<?php
/* 
Safe sample
input : reads the field UserData from the variable $_GET
SANITIZE : use in_array to check if $tainted is in the white list
construction : concatenation with simple quote
*/
$tainted = $_GET['UserData'];
$legal_table = array("safe1", "safe2");
if (in_array($tainted, $legal_table, true)) {
  $tainted = $tainted;
} else {
  $tainted = $legal_table[0];
}
$var = require("'". $tainted . ".php'");
?>