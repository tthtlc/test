<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : use of floatval
construction : interpretation with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted = floatval($tainted);
$var = require("pages/'$tainted'.php");
?>