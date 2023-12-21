<?php
/* 
Safe sample
input : get the UserData field of $_SESSION
sanitize : use of the function htmlentities. Sanitizes the query but has a high chance to produce unexpected results
construction : interpretation with simple quote
*/
$tainted = $_SESSION['UserData'];
$tainted = htmlentities($tainted, ENT_QUOTES);
$var = include("'$tainted'.php");
?>