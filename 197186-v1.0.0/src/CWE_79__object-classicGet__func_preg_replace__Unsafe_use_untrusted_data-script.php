<!-- 
Unsafe sample
input : get the field userData from the variable $_GET via an object
SANITIZE : use of preg_replace
File : unsafe, use of untrusted data in a script
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
$tainted = preg_replace('/\'/', '', $tainted);
//flaw
echo $tainted ;
?>
</script>
</head>
<body onload="xss()">
<h1>Hello World!</h1>
</body>
</html>