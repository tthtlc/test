<!-- 
Unsafe sample
input : get the field userData from the variable $_GET via an object
sanitize : use of ternary condition
File : unsafe, use of untrusted data in an attribute name
-->
<!DOCTYPE html>
<html>
<body>
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
echo "<div ". $tainted ."= bob />" ;
?>
<h1>Hello World!</h1>
</div>
</body>
</html>