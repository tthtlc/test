<?php
/* 
Safe sample
input : get the UserData field of $_SESSION
sanitize : cast into int
construction : use of sprintf via a %s with simple quote
*/
$tainted = $_SESSION['UserData'];
$tainted = (int) $tainted ;
$query = sprintf("find / size '%d'", $tainted);
$ret = system($query);
?>