<?php
/* 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : settype (float)
construction : use of sprintf via a %d with simple quote
*/
$tainted = `cat /tmp/tainted.txt`;
if(settype($tainted, "float"))
  $tainted = $tainted ;
else
  $tainted = 0.0 ;
$var = require(sprintf("pages/'%d'.php", $tainted));
?>