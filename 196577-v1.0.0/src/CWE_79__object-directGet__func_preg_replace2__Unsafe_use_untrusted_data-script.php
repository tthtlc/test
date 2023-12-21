<!-- 
Safe sample
input : get the field userData from the variable $_GET via an object
SANITIZE : use of preg_replace with another regex
File : unsafe, use of untrusted data in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
class Input{
  public function getInput(){
    return $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$tainted = preg_replace('/\W/si','',$tainted);
echo $tainted ;
?>
</script>
</head>
<body onload="xss()">
<h1>Hello World!</h1>
</body>
</html>