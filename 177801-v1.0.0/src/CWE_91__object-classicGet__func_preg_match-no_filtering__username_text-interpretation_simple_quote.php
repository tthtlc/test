<?php
/* 
Unsafe sample
input : get the field userData from the variable $_GET via an object
sanitize : regular expression accepts everything
construction : interpretation with simple quote
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
$re = "/^.*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
$query = "//User[username/text()=' $tainted ']";
//flaw
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>