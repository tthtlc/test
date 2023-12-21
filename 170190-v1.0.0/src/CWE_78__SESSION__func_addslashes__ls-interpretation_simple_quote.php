<?php
/* 
Safe sample
input : get the UserData field of $_SESSION
sanitize : use of the function addslashes
construction : interpretation with simple quote
*/
$tainted = $_SESSION['UserData'];
$tainted = addslashes($tainted);
$query = "ls ' $tainted '";
$ret = system($query);
?>