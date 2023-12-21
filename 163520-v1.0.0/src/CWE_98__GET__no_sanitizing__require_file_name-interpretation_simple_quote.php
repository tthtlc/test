<?php
/* 
Unsafe sample
input : reads the field UserData from the variable $_GET
sanitize : none
construction : interpretation with simple quote
*/
$tainted = $_GET['UserData'];
//no_sanitizing
//flaw
$var = require("'$tainted'.php");
?>