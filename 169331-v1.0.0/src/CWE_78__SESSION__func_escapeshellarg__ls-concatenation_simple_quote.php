<?php
/* 
Safe sample
input : get the UserData field of $_SESSION
sanitize : use the function escapeshellarg
construction : concatenation with simple quote
*/
$tainted = $_SESSION['UserData'];
        $tained = escapeshellarg($tained);
      
$query = "ls '". $tainted . "'";
$ret = system($query);
?>