<!-- 
Safe sample
input : get the field userData from the variable $_GET via an object, which store it in a array
sanitize : use of settype_int
File : unsafe, use of untrusted data in CSS
-->
<!DOCTYPE html>
<html>
<head>
<style>
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
if (settype($tainted, "integer"))
  $tainted = $tainted ;
else
  $tainted = 0 ;
echo $tainted ;
?>
</style>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>