<!-- 
Safe sample
input : get the field userData from the variable $_GET via an object, which store it in a array
sanitize : cast via + = 0
File : use of untrusted data in the body
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
class Input{
  private $input;
  public function getInput(){
    return $this->input['realOne'];
  }
  public  function __construct(){
    $this->input = array();
    $this->input['test']= 'safe' ;
    $this->input['realOne']= $_GET['UserData'] ;
    $this->input['trap']= 'safe' ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$tainted += 0 ;
echo $tainted ;
?>
<h1>Hello World!</h1>
</body>
</html>
