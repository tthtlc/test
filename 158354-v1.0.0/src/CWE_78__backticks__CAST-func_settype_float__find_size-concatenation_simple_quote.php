<?php
/* 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : settype (float)
construction : concatenation with simple quote
*/
$tainted = `cat /tmp/tainted.txt`;
if(settype($tainted, "float"))
  $tainted = $tainted ;
else
  $tainted = 0.0 ;
$query = "find / size '". $tainted . "'";
$ret = system($query);
?>