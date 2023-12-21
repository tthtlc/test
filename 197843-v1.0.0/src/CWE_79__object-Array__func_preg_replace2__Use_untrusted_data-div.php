<!-- 
Safe sample
input : get the field userData from the variable $_GET via an object, which store it in a array
SANITIZE : use of preg_replace with another regex
File : use of untrusted data in a div tag
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<div>
<?php
class Input{
  private $input;
  public function getInput(){
    return $this->input[1];
  }
  public  function __construct(){
    $this->input = array();
    $this->input[0]= 'safe' ;
    $this->input[1]= $_GET['UserData'] ;
    $this->input[2]= 'safe' ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$tainted = preg_replace('/\W/si','',$tainted);
echo $tainted ;
?>
</div>
<h1>Hello World!</h1>
</body>
</html>