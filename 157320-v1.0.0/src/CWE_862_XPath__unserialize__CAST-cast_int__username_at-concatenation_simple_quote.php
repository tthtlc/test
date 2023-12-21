<?php
/*
/* 
Unsafe sample
input : Get a serialize string in POST and unserialize it
sanitize : cast into int
construction : concatenation with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$tainted = (int) $tainted ;
//flaw
$query = "//User[@username='". $tainted . "']";
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
 ?>