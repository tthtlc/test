<?php
/* 
Safe sample
input : get the field UserData from the variable $_POST
sanitize : use of floatval
construction : use of sprintf via a %d with simple quote
*/
$tainted = $_POST['UserData'];
$tainted = floatval($tainted);
$var = require(sprintf("pages/'%d'.php", $tainted));
?>