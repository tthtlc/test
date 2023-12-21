<?php
/* 
Safe sample
input : reads the field UserData from the variable $_GET
sanitize : cast via + = 0
construction : use of sprintf via a %d with simple quote
*/
$tainted = $_GET['UserData'];
$tainted += 0 ;
$var = http_redirect(sprintf("pages/'%d'.php", $tainted));
?>