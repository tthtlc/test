<?php
/* 
Unsafe sample
input : get the field UserData from the variable $_POST
Uses a special_chars_filter via filter_var function
construction : concatenation with simple quote
*/
$tainted = $_POST['UserData'];
$sanitized = filter_var($tainted, FILTER_SANITIZE_SPECIAL_CHARS);
  $tainted = $sanitized ;
      
$query = "//User[username/text()='". $tainted . "']";
//flaw
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>