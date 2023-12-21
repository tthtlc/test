<?php
/* 
Safe sample
input : get the field UserData from the variable $_POST
sanitize : use mysql_real_escape_string via an object
construction : concatenation with simple quote
*/
$tainted = $_POST['UserData'];
class Sanitize{
  public function sanitize($input){
    return mysql_real_escape_string($input);
  }
}
$temp = new Sanitize();
$tainted = $temp->sanitize($tainted);
$query = "user[username='". $tainted . "']";
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>