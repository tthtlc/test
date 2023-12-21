<?php
/* 
Safe sample
input : reads the field UserData from the variable $_GET
sanitize : use of floatval
construction : concatenation with simple quote
*/
$tainted = $_GET['UserData'];
$tainted = floatval($tainted);
$query = "$temp = '". $tainted . "';";
$res = eval($query);
?>