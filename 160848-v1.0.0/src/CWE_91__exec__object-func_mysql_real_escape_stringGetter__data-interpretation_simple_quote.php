<?php
/* 
Safe sample
input : use exec to execute the script /tmp/tainted.php and store the output in $tainted
sanitize : use mysql_real_escape_string via an object and a classic getter
construction : interpretation with simple quote
*/
$script = "/tmp/tainted.php";
exec($script, $result, $return);
$tainted = $result[0];
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
$query = "' $tainted '";
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>