<?php
/* 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
SANITIZE : use of preg_replace with another regex
construction : concatenation with simple quote
*/
$tainted = system('ls', $retval);
$tainted = preg_replace('/\W/si','',$tainted);
$query = "ls '". $tainted . "'";
$ret = system($query);
?>