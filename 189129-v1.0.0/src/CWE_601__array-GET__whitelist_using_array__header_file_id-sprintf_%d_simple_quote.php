<?php
/* 
Safe sample
input : get the $_GET['userData'] in an array
SANITIZE : use in_array to check if $tainted is in the white list
construction : use of sprintf via a %d with simple quote
*/
$array = array();
$array[] = 'safe' ;
$array[] = $_GET['userData'] ;
$array[] = 'safe' ;
$tainted = $array[1] ;
$legal_table = array("safe1", "safe2");
if (in_array($tainted, $legal_table, true)) {
  $tainted = $tainted;
} else {
  $tainted = $legal_table[0];
}
$var = header(sprintf("Location: pages/'%d'.php", $tainted));
?>