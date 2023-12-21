<?php
/* 
Unsafe sample
input : use exec to execute the script /tmp/tainted.php and store the output in $tainted
SANITIZE : use of preg_replace
construction : interpretation with simple quote
*/
$script = "/tmp/tainted.php";
exec($script, $result, $return);
$tainted = $result[0];
$tainted = preg_replace('/\'/', '', $tainted);
//flaw
$var = header("Location: '$tainted'.php");
?>