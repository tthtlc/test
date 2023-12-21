<!-- 
Unsafe sample
input : get the field userData from the variable $_GET via an object
sanitize : use of the function htmlspecialchars. Sanitizes the query but has a high chance to produce unexpected results
File : unsafe, use of untrusted data in an attribute name
-->
<!DOCTYPE html>
<html>
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
$tainted = htmlspecialchars($tainted, ENT_QUOTES);
//flaw
echo "<div ". $tainted ."= bob />" ;
?>
<h1>Hello World!</h1>
</div>
</body>
</html>