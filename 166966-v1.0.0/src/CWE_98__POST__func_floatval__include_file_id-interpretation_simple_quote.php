<?php
/* 
Safe sample
input : get the field UserData from the variable $_POST
sanitize : use of floatval
construction : interpretation with simple quote
*/
$tainted = $_POST['UserData'];
$tainted = floatval($tainted);
$var = include("pages/'$tainted'.php");
?>