<?php
/* 
Safe sample
input : reads the field UserData from the variable $_GET
SANITIZE : use of preg_replace
construction : interpretation with simple quote
*/
$tainted = $_GET['UserData'];
$tainted = preg_replace('/\'/', '', $tainted);
$var = include("'$tainted'.php");
?>