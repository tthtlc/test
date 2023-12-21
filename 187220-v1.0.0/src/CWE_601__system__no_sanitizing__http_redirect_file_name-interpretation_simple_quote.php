<?php
/* 
Unsafe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : none
construction : interpretation with simple quote
*/
$tainted = system('ls', $retval);
//no_sanitizing
//flaw
$var = http_redirect("'$tainted'.php");
?>