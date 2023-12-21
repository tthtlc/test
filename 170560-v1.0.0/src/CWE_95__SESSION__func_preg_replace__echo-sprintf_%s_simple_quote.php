<?php
/* 
Safe sample
input : get the UserData field of $_SESSION
SANITIZE : use of preg_replace
construction : use of sprintf via a %s with simple quote
*/
$tainted = $_SESSION['UserData'];
$tainted = preg_replace('/\'/', '', $tainted);
$query = sprintf("echo $'%s';", $tainted);
$res = eval($query);
?>