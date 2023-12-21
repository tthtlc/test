<?php
/* 
Unsafe sample
input : get the field UserData from the variable $_POST
SANITIZE : use of preg_replace with another regex
construction : concatenation with simple quote
*/
$tainted = $_POST['UserData'];
$tainted = preg_replace('/\W/si','',$tainted);
//flaw
$var = http_redirect("'" . $tainted . "'");
?>