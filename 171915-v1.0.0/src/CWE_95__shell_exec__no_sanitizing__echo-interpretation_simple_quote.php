<?php
/* 
Unsafe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : none
construction : interpretation with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
//no_sanitizing
$query = "echo $'$tainted';";
//flaw
$res = eval($query);
?>