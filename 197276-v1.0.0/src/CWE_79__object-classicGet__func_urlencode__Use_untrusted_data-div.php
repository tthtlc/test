<!-- 
Safe sample
input : get the field userData from the variable $_GET via an object
SANITIZE : use of urlencode
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
    return $this->input;
  }
  public  function __construct(){
   $this->input = $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$tainted = urlencode($tainted);
echo $tainted ;
?>
</div>
<h1>Hello World!</h1>
</body>
</html>