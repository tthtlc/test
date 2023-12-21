<?php
/*
/* 
Safe sample
input : reads the field UserData from the variable $_GET
sanitize : use of ternary condition
construction : concatenation and checks if the user is allowed to see this data
*/
$tainted = $_GET['UserData'];
$tainted = $tainted  == 'safe1' ? 'safe1' : 'safe2';
$query="//Course[@id=". $tainted . "and @allowed=". $_SESSION[userid] . "]";
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
 ?>