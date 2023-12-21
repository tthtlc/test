<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : cast via + = 0
construction : concatenation with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted += 0 ;
$var = include("pages/'". $tainted . "'.php");
?>