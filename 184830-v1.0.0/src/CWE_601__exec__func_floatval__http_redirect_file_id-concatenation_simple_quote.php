<?php
/* 
Safe sample
input : use exec to execute the script /tmp/tainted.php and store the output in $tainted
sanitize : use of floatval
construction : concatenation with simple quote
*/
$script = "/tmp/tainted.php";
exec($script, $result, $return);
$tainted = $result[0];
$tainted = floatval($tainted);
$var = http_redirect("pages/'". $tainted . "'.php");
?>