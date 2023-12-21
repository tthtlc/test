<?php
/* 
Safe sample
input : Get a serialize string in POST and unserialize it
sanitize : use mysql_real_escape_string via an object
construction : concatenation with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
class Sanitize{
  public function sanitize($input){
    return mysql_real_escape_string($input);
  }
}
$temp = new Sanitize();
$tainted = $temp->sanitize($tainted);
$query = "//User[username/text()='". $tainted . "']";
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>