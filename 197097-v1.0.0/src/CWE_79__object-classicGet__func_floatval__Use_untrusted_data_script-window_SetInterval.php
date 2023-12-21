<!-- 
Safe sample
input : get the field userData from the variable $_GET via an object
sanitize : use of floatval
File : unsafe, use of untrusted data in the function setInterval
-->
<!DOCTYPE html>
<html>
<head>
<script>
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
$tainted = floatval($tainted);
echo "window.setInterval('". $tainted ."');" ;
?>
 </script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>