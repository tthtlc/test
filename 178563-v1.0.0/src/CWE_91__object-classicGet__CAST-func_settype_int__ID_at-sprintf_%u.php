<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object
sanitize : use of settype_int
construction : use of sprintf via a %u
*/
class Input{
  private $input;
  public function getInput(){
    return $this->input;
  }
  public  function __construct(){
   $this->input = $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
if (settype($tainted, "integer"))
  $tainted = $tainted ;
else
  $tainted = 0 ;
$query = sprintf("//User[@id=%u]", $tainted);
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>