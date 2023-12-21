<?php
/* 
Safe sample
input : use exec to execute the script /tmp/tainted.php and store the output in $tainted
sanitize : use the function escapeshellarg
construction : interpretation with simple quote
*/
$script = "/tmp/tainted.php";
exec($script, $result, $return);
$tainted = $result[0];
        $tained = escapeshellarg($tained);
      
$query = "ls ' $tainted '";
$ret = system($query);
?>