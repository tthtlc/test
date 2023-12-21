<?php
/* 
Safe sample
input : get the UserData field of $_SESSION
sanitize : use of ternary condition
construction : concatenation with simple quote
*/
$tainted = $_SESSION['UserData'];
$tainted = $tainted  == 'safe1' ? 'safe1' : 'safe2';
$var = require("pages/'". $tainted . "'.php");
?>