<?php
/* 
Safe sample
input : reads the field UserData from the variable $_GET
sanitize : use of floatval
construction : concatenation with simple quote
*/
$tainted = $_GET['UserData'];
$tainted = floatval($tainted);
$var = include("pages/'". $tainted . "'.php");
?>