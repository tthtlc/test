<?php
/* 
Safe sample
input : get the field UserData from the variable $_POST
SANITIZE : use of preg_replace with another regex
construction : use of sprintf via a %s with simple quote
*/
$tainted = $_POST['UserData'];
$tainted = preg_replace('/\W/si','',$tainted);
$query = sprintf("//User[@username='%s']", $tainted);
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>