<?php
/* 
Safe sample
input : get the UserData field of $_SESSION
sanitize : use of the function htmlspecialchars. Sanitizes the query but has a high chance to produce unexpected results
construction : concatenation with simple quote
*/
$tainted = $_SESSION['UserData'];
$tainted = htmlspecialchars($tainted, ENT_QUOTES);
$query = "//User[username/text()='". $tainted . "']";
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>