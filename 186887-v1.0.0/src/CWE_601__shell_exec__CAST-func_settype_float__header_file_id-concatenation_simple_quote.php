<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : settype (float)
construction : concatenation with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
if(settype($tainted, "float"))
  $tainted = $tainted ;
else
  $tainted = 0.0 ;
$var = header("Location: pages/'". $tainted . "'.php");
?>