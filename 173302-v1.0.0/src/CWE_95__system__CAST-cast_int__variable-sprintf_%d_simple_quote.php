<?php
/* 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : cast into int
construction : use of sprintf via a %d with simple quote
*/
$tainted = system('ls', $retval);
$tainted = (int) $tainted ;
$query = sprintf("$temp = '%d';", $tainted);
$res = eval($query);
?>