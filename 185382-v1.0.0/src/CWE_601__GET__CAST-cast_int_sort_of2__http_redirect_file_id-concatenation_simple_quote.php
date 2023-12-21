<?php
/* 
Safe sample
input : reads the field UserData from the variable $_GET
sanitize : cast via + = 0
construction : concatenation with simple quote
*/
$tainted = $_GET['UserData'];
$tainted = $tainted + 0;
$var = http_redirect("pages/'". $tainted . "'.php");
?>