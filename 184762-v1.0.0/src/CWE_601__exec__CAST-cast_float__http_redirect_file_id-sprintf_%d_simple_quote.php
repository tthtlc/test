<?php
/* 
Safe sample
input : use exec to execute the script /tmp/tainted.php and store the output in $tainted
sanitize : cast in float
construction : use of sprintf via a %d with simple quote
*/
$script = "/tmp/tainted.php";
exec($script, $result, $return);
$tainted = $result[0];
$tainted = (float) $tainted ;
$var = http_redirect(sprintf("pages/'%d'.php", $tainted));
?>