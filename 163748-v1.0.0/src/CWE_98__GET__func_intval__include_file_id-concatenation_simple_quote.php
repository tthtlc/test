<?php
/* 
Safe sample
input : reads the field UserData from the variable $_GET
sanitize : use of intval
construction : concatenation with simple quote
*/
$tainted = $_GET['UserData'];
$tainted = intval($tainted);
$var = include("pages/'". $tainted . "'.php");
?>