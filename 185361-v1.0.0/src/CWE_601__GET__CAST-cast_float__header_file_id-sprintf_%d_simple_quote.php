<?php
/* 
Safe sample
input : reads the field UserData from the variable $_GET
sanitize : cast in float
construction : use of sprintf via a %d with simple quote
*/
$tainted = $_GET['UserData'];
$tainted = (float) $tainted ;
$var = header(sprintf("Location: pages/'%d'.php", $tainted));
?>