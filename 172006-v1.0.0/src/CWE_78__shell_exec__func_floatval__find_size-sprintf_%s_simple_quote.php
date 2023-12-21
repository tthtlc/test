<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : use of floatval
construction : use of sprintf via a %s with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted = floatval($tainted);
$query = sprintf("find / size '%d'", $tainted);
$ret = system($query);
?>