<!-- 
Safe sample
input : get the field userData from the variable $_GET via an object, which store it in a array
SANITIZE : use of http_build_query
File : use of untrusted data in a quoted event handler in a script
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
$tainted = http_build_query($tainted);
echo "<div onmouseover=\"x='". $tainted ."'\>";
?>
<h1>Hello World!</h1>
</div>
</body>
</html>