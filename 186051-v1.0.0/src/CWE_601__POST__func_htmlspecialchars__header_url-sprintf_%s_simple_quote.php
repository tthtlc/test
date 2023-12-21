<?php
/* 
Unsafe sample
input : get the field UserData from the variable $_POST
sanitize : use of the function htmlspecialchars. Sanitizes the query but has a high chance to produce unexpected results
construction : use of sprintf via a %s with simple quote
*/
$tainted = $_POST['UserData'];
$tainted = htmlspecialchars($tainted, ENT_QUOTES);
//flaw
$var = header(sprintf("Location: '%s'", $tainted));
?>