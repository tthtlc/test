<?php
/* 
Safe sample
input : reads the field UserData from the variable $_GET
sanitize : use the function escapeshellarg
construction : interpretation with simple quote
*/
$tainted = $_GET['UserData'];
        $tained = escapeshellarg($tained);
      
$query = "cat ' $tainted '";
$ret = system($query);
?>