<?php
/* 
Safe sample
input : use exec to execute the script /tmp/tainted.php and store the output in $tainted
sanitize : use of the function addslashes
construction : use of sprintf via a %s with simple quote
*/
$script = "/tmp/tainted.php";
exec($script, $result, $return);
$tainted = $result[0];
$tainted = addslashes($tainted);
$var = include(sprintf("'%s'.php", $tainted));
?>