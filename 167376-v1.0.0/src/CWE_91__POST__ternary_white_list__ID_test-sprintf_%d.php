<?php
/* 
Safe sample
input : get the field UserData from the variable $_POST
sanitize : use of ternary condition
construction : use of sprintf via a %d
*/
$tainted = $_POST['UserData'];
$tainted = $tainted  == 'safe1' ? 'safe1' : 'safe2';
$query = sprintf("//User[@id=%d]", $tainted);
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>