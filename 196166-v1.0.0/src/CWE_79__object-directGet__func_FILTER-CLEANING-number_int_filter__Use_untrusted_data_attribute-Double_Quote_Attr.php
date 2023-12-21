<!-- 
Safe sample
input : get the field userData from the variable $_GET via an object
Uses a number_int_filter via filter_var function
File : use of untrusted data in a doubled quote attribute
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
class Input{
  public function getInput(){
    return $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$sanitized = filter_var($tainted, FILTER_SANITIZE_NUMBER_INT);
if (filter_var($sanitized, FILTER_VALIDATE_INT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
echo "<div id=\"". $tainted ."\">content</div>" ;
?>
<h1>Hello World!</h1>
</body>
</html>