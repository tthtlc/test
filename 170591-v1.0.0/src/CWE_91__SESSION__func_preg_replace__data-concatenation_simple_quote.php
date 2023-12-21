<?php
/* 
Safe sample
input : get the UserData field of $_SESSION
SANITIZE : use of preg_replace
construction : concatenation with simple quote
*/
$tainted = $_SESSION['UserData'];
$tainted = preg_replace('/\'/', '', $tainted);
$query = "'". $tainted . "'";
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>