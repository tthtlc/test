<?php
/* 
Safe sample
input : Get a serialize string in POST and unserialize it
sanitize : cast via + = 0
construction : use of sprintf via a %s with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$tainted = $tainted + 0;
$query = sprintf("//User[@id='%s']", $tainted);
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>