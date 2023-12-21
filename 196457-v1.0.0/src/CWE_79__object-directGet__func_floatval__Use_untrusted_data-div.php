<!-- 
Safe sample
input : get the field userData from the variable $_GET via an object
sanitize : use of floatval
File : use of untrusted data in a div tag
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<div>
<?php
class Input{
  public function getInput(){
    return $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$tainted = floatval($tainted);
echo $tainted ;
?>
</div>
<h1>Hello World!</h1>
</body>
</html>