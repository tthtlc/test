<?php
/* 
Unsafe sample
input : get the UserData field of $_SESSION
sanitize : none
construction : use of sprintf via a %s with simple quote
*/
$tainted = $_SESSION['UserData'];
//no_sanitizing
$query = sprintf("echo $'%s';", $tainted);
//flaw
$res = eval($query);
?>