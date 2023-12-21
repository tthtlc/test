<?php
/* 
Safe sample
input : reads the field UserData from the variable $_GET
SANITIZE : use of preg_replace with another regex
construction : use of sprintf via a %s with simple quote
*/
$tainted = $_GET['UserData'];
$tainted = preg_replace('/\W/si','',$tainted);
$var = require(sprintf("'%s'.php", $tainted));
?>