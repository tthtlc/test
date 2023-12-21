<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : use of settype_int
construction : concatenation with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
if (settype($tainted, "integer"))
  $tainted = $tainted ;
else
  $tainted = 0 ;
$var = http_redirect("pages/'". $tainted . "'.php");
?>