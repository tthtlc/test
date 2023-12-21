<?php
/* 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : cast via + = 0
construction : use of sprintf via a %d with simple quote
*/
$tainted = system('ls', $retval);
$tainted = $tainted + 0;
$var = include(sprintf("pages/'%d'.php", $tainted));
?>