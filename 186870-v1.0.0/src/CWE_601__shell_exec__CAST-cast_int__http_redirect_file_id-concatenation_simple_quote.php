<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : cast into int
construction : concatenation with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted = (int) $tainted ;
$var = http_redirect("pages/'". $tainted . "'.php");
?>