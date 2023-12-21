<!-- 
Safe sample
input : get the field userData from the variable $_GET via an object, which store it in a array
sanitize : use of the function addslashes
File : use of untrusted data in one side of a double quoted expression in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
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
$tainted = addslashes($tainted);
echo "x=\"". $tainted."\"" ;
?>
</script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>