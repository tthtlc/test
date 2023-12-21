<?php
/* 
Safe sample
input : get the field UserData from the variable $_POST
sanitize : cast via + = 0
construction : use of sprintf via a %d with simple quote
*/
$tainted = $_POST['UserData'];
$tainted += 0 ;
$query = sprintf("$temp = '%d';", $tainted);
$res = eval($query);
?>