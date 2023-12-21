<?php
/* 
Safe sample
input : reads the field UserData from the variable $_GET
sanitize : cast via + = 0
construction : interpretation with simple quote
*/
$tainted = $_GET['UserData'];
$tainted += 0 ;
$var = include("pages/'$tainted'.php");
?>