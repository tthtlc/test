<!-- 
Safe sample
input : get the field userData from the variable $_GET via an object
sanitize : settype (float)
File : use of untrusted data in a double quoted event handler in a script
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
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
if(settype($tainted, "float"))
  $tainted = $tainted ;
else
  $tainted = 0.0 ;
echo "<div onmouseover=\"x=\"". $tainted ."\"\>";
?>
<h1>Hello World!</h1>
</div>
</body>
</html>