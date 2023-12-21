<?php
/* 
Unsafe sample
input : execute a ls command using the function system, and put the last result in $tainted
Uses an email_filter via filter_var function
construction : interpretation with simple quote
*/
$tainted = system('ls', $retval);
$sanitized = filter_var($tainted, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$query = "user[username=' $tainted ']";
//flaw
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>