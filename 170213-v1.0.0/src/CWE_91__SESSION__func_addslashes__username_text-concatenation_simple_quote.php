<?php
/* 
Safe sample
input : get the UserData field of $_SESSION
sanitize : use of the function addslashes
construction : concatenation with simple quote
*/
$tainted = $_SESSION['UserData'];
$tainted = addslashes($tainted);
$query = "//User[username/text()='". $tainted . "']";
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>