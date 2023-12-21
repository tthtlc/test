<?php
/* 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : cast via + = 0
construction : interpretation with simple quote
*/
$tainted = system('ls', $retval);
$tainted = $tainted + 0;
$var = header("Location: pages/'$tainted'.php");
?>