<!-- 
Unsafe sample
input : get the field userData from the variable $_GET via an object
SANITIZE : use of rawurlencode
File : unsafe, use of untrusted data in CSS
-->
<!DOCTYPE html>
<html>
<head>
<style>
<?php
class Input{
  public function getInput(){
    return $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$tainted = rawurlencode($tainted);
//flaw
echo $tainted ;
?>
</style>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>