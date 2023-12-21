<?php
/* 
Unsafe sample
input : get the field UserData from the variable $_POST
sanitize : none
construction : interpretation with simple quote
*/
$tainted = $_POST['UserData'];
//no_sanitizing
//flaw
$var = header("Location: pages/'$tainted'.php");
?>