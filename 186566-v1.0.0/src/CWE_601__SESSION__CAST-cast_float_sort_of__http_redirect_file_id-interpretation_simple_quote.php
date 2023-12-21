<?php
/* 
Safe sample
input : get the UserData field of $_SESSION
sanitize : cast via + = 0.0
construction : interpretation with simple quote
*/
$tainted = $_SESSION['UserData'];
$tainted += 0.0 ;
$var = http_redirect("pages/'$tainted'.php");
?>