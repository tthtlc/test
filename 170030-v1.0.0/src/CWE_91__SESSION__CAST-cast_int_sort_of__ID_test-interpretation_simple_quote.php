<?php
/* 
Safe sample
input : get the UserData field of $_SESSION
sanitize : cast via + = 0
construction : interpretation with simple quote
*/
$tainted = $_SESSION['UserData'];
$tainted += 0 ;
$query = "//User[@id=' $tainted ']";
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>