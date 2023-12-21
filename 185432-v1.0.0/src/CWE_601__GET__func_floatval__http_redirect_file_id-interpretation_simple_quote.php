<?php
/* 
Safe sample
input : reads the field UserData from the variable $_GET
sanitize : use of floatval
construction : interpretation with simple quote
*/
$tainted = $_GET['UserData'];
$tainted = floatval($tainted);
$var = http_redirect("pages/'$tainted'.php");
?>