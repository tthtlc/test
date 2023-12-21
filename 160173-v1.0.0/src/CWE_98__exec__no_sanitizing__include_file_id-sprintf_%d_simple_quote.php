<?php
/* 
Unsafe sample
input : use exec to execute the script /tmp/tainted.php and store the output in $tainted
sanitize : none
construction : use of sprintf via a %d with simple quote
*/
$script = "/tmp/tainted.php";
exec($script, $result, $return);
$tainted = $result[0];
//no_sanitizing
//flaw
$var = include(sprintf("pages/'%d'.php", $tainted));
?>