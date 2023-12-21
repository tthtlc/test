<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : use the function escapeshellarg
construction : interpretation with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
        $tained = escapeshellarg($tained);
      
$query = "ls ' $tainted '";
$ret = system($query);
?>