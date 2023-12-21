<?php
/* 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : use of settype_int
construction : concatenation with simple quote
*/
$tainted = system('ls', $retval);
if (settype($tainted, "integer"))
  $tainted = $tainted ;
else
  $tainted = 0 ;
$query = "find / size '". $tainted . "'";
$ret = system($query);
?>