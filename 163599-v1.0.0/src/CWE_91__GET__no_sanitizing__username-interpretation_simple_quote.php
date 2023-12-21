<?php
/* 
Unsafe sample
input : reads the field UserData from the variable $_GET
sanitize : none
construction : interpretation with simple quote
*/
$tainted = $_GET['UserData'];
//no_sanitizing
$query = "user[username=' $tainted ']";
//flaw
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>