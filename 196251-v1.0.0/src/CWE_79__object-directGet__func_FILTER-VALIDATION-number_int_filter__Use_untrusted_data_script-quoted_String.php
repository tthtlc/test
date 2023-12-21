<!-- 
Safe sample
input : get the field userData from the variable $_GET via an object
Flushes content of $sanitized if the filter number_int_filter is not applied
File : use of untrusted data in a simple quoted string in a script
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
if (filter_var($sanitized, FILTER_VALIDATE_INT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
echo "alert('". $tainted ."')" ;
?>
</script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>