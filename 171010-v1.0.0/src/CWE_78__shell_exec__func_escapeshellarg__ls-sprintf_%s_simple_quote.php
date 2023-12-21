<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : use the function escapeshellarg
construction : use of sprintf via a %s with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
        $tained = escapeshellarg($tained);
      
$query = sprintf("ls '%s'", $tainted);
$ret = system($query);
?>