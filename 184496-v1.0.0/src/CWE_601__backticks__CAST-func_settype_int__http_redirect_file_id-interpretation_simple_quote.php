<?php
/* 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : use of settype_int
construction : interpretation with simple quote
*/
$tainted = `cat /tmp/tainted.txt`;
if (settype($tainted, "integer"))
  $tainted = $tainted ;
else
  $tainted = 0 ;
$var = http_redirect("pages/'$tainted'.php");
?>