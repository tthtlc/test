<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : use of ternary condition
construction : concatenation with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted = $tainted  == 'safe1' ? 'safe1' : 'safe2';
$var = http_redirect("pages/'". $tainted . "'.php");
?>