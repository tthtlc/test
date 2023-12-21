<?php
/* 
Safe sample
input : use exec to execute the script /tmp/tainted.php and store the output in $tainted
sanitize : use of settype_int
construction : use of sprintf via a %d with simple quote
*/
$script = "/tmp/tainted.php";
exec($script, $result, $return);
$tainted = $result[0];
if (settype($tainted, "integer"))
  $tainted = $tainted ;
else
  $tainted = 0 ;
$var = require(sprintf("pages/'%d'.php", $tainted));
?>