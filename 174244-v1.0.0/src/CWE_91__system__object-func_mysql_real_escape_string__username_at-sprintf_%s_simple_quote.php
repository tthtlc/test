<?php
/* 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : use mysql_real_escape_string via an object
construction : use of sprintf via a %s with simple quote
*/
$tainted = system('ls', $retval);
class Sanitize{
  public function sanitize($input){
    return mysql_real_escape_string($input);
  }
}
$temp = new Sanitize();
$tainted = $temp->sanitize($tainted);
$query = sprintf("//User[@username='%s']", $tainted);
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>