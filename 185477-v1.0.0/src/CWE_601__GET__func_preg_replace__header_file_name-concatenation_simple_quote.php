<?php
/* 
Unsafe sample
input : reads the field UserData from the variable $_GET
SANITIZE : use of preg_replace
construction : concatenation with simple quote
*/
$tainted = $_GET['UserData'];
$tainted = preg_replace('/\'/', '', $tainted);
//flaw
$var = header("'Location: " . $tainted .".php'");
?>