<?php
/* 
Safe sample
input : get the UserData field of $_SESSION
sanitize : use of intval
construction : concatenation with simple quote
*/
$tainted = $_SESSION['UserData'];
$tainted = intval($tainted);
$var = include("pages/'". $tainted . "'.php");
?>