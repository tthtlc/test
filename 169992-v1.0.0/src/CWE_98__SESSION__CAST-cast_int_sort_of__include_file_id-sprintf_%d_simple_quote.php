<?php
/* 
Safe sample
input : get the UserData field of $_SESSION
sanitize : cast via + = 0
construction : use of sprintf via a %d with simple quote
*/
$tainted = $_SESSION['UserData'];
$tainted += 0 ;
$var = include(sprintf("pages/'%d'.php", $tainted));
?>