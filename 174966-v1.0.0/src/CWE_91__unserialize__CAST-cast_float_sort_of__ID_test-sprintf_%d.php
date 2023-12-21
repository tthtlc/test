<?php
/* 
Safe sample
input : Get a serialize string in POST and unserialize it
sanitize : cast via + = 0.0
construction : use of sprintf via a %d
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$tainted += 0.0 ;
$query = sprintf("//User[@id=%d]", $tainted);
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>