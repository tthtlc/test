<?php
/* 
Unsafe sample
input : get the UserData field of $_SESSION
sanitize : none
construction : concatenation with simple quote
*/
$tainted = $_SESSION['UserData'];
//no_sanitizing
$query = "user[username='". $tainted . "']";
//flaw
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>