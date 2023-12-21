<?php
/* 
Safe sample
input : Get a serialize string in POST and unserialize it
sanitize : use mysql_real_escape_string via an object and a classic getter
construction : use of sprintf via a %s with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
class Sanitize{
  private $data;
  public function __construct($input){
    $this->data = $input ;
  }
  public function getData(){
    return $this->data;
  }
  public function sanitize(){
    $this->data = mysql_real_escape_string($this->data) ;
  }
}
$sanitizer = new Sanitize($tainted) ;
$sanitizer->sanitize();
$tainted = $sanitizer->getData(); 
$query = sprintf("//User[username/text()='%s']", $tainted);
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>