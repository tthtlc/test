<!-- 
Unsafe sample
input : get the field userData from the variable $_GET via an object, which store it in a array
sanitize : use of the function addslashes
File : unsafe, use of untrusted data in an tag name
-->
<!DOCTYPE html>
<html>
<head/>
<body>
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
$tainted = addslashes($tainted);
//flaw
echo "<".  $tainted ." href= \"/bob\" />" ;
?>
<h1>Hello World!</h1>
</body>
</html>