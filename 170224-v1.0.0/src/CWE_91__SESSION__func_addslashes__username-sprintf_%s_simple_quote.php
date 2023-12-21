<?php
/* 
Safe sample
input : get the UserData field of $_SESSION
sanitize : use of the function addslashes
construction : use of sprintf via a %s with simple quote
*/
$tainted = $_SESSION['UserData'];
$tainted = addslashes($tainted);
$query = sprintf("user[username='%s']", $tainted);
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>