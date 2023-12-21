<?php
/* 
Unsafe sample
input : get the field UserData from the variable $_POST
sanitize : use of the function htmlentities. Sanitizes the query but has a high chance to produce unexpected results
construction : interpretation with simple quote
*/
$tainted = $_POST['UserData'];
$tainted = htmlentities($tainted, ENT_QUOTES);
//flaw
$var = http_redirect("'$tainted'");
?>