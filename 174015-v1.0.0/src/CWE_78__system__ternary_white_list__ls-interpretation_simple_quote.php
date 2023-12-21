<?php
/* 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : use of ternary condition
construction : interpretation with simple quote
*/
$tainted = system('ls', $retval);
$tainted = $tainted  == 'safe1' ? 'safe1' : 'safe2';
$query = "ls ' $tainted '";
$ret = system($query);
?>