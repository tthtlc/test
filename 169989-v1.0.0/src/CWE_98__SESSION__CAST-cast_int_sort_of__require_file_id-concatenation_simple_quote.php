<?php
/* 
Safe sample
input : get the UserData field of $_SESSION
sanitize : cast via + = 0
construction : concatenation with simple quote
*/
$tainted = $_SESSION['UserData'];
$tainted += 0 ;
$var = require("pages/'". $tainted . "'.php");
?>