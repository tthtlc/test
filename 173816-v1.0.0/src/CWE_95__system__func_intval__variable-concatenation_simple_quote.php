<?php
/* 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : use of intval
construction : concatenation with simple quote
*/
$tainted = system('ls', $retval);
$tainted = intval($tainted);
$query = "$temp = '". $tainted . "';";
$res = eval($query);
?>