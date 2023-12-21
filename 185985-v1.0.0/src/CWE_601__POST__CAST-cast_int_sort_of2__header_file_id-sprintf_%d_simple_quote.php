<?php
/* 
Safe sample
input : get the field UserData from the variable $_POST
sanitize : cast via + = 0
construction : use of sprintf via a %d with simple quote
*/
$tainted = $_POST['UserData'];
$tainted = $tainted + 0;
$var = header(sprintf("Location: pages/'%d'.php", $tainted));
?>