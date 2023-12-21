<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : use of floatval
construction : interpretation with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted = floatval($tainted);
$query = "find / size ' $tainted '";
$ret = system($query);
?>