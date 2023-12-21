<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : use of the function addslashes
construction : interpretation with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted = addslashes($tainted);
$var = include("'$tainted'.php");
?>