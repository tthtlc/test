<!-- 
Unsafe sample
input : get the field userData from the variable $_GET via an object
sanitize : use of the function addslashes
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
$tainted = addslashes($tainted);
//flaw
echo $tainted ;
?>
</div>
<h1>Hello World!</h1>
</body>
</html>