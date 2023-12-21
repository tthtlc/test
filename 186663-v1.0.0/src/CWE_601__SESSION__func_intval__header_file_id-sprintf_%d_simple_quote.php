<?php
/* 
Safe sample
input : get the UserData field of $_SESSION
sanitize : use of intval
construction : use of sprintf via a %d with simple quote
*/
$tainted = $_SESSION['UserData'];
$tainted = intval($tainted);
$var = header(sprintf("Location: pages/'%d'.php", $tainted));
?>