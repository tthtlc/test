<?php
/*
/* 
Safe sample
input : Get a serialize string in POST and unserialize it
SANITIZE : use in_array to check if $tainted is in the white list
construction : fopen
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$legal_table = array("safe1", "safe2");
if (in_array($tainted, $legal_table, true)) {
  $tainted = $tainted;
} else {
  $tainted = $legal_table[0];
}
$var = fopen($tainted, "r");
 ?>