<?php
/* 
Unsafe sample
input : get the UserData field of $_SESSION
SANITIZE : use of preg_replace with another regex
construction : concatenation with simple quote
*/
$tainted = $_SESSION['UserData'];
$tainted = preg_replace('/\W/si','',$tainted);
//flaw
$var = header("'Location: " . $tainted ."'");
?>