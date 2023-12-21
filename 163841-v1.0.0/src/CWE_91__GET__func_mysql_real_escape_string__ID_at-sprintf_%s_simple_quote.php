<?php
/* 
Safe sample
input : reads the field UserData from the variable $_GET
SANITIZE : use of mysql_real_escape string
construction : use of sprintf via a %s with simple quote
*/
$tainted = $_GET['UserData'];
$tainted = mysql_real_escape_string($tainted);
$query = sprintf("//User[@id='%s']", $tainted);
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>