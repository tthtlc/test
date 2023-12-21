<!-- 
Unsafe sample
input : get the field userData from the variable $_GET via an object
sanitize : use of ternary condition
File : unsafe, use of untrusted data in a quoted property value (CSS)
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
$tainted = $tainted  == 'safe1' ? 'safe1' : 'safe2';
//flaw
echo "body { color :\'". $tainted ."\' ; }" ;
?>
</style> 
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>