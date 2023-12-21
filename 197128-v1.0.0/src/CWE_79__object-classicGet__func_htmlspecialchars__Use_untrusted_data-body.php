<!-- 
Safe sample
input : get the field userData from the variable $_GET via an object
sanitize : use of the function htmlspecialchars. Sanitizes the query but has a high chance to produce unexpected results
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
    return $this->input;
  }
  public  function __construct(){
   $this->input = $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$tainted = htmlspecialchars($tainted, ENT_QUOTES);
echo $tainted ;
?>
<h1>Hello World!</h1>
</body>
</html>
