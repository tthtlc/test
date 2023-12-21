<!-- 
Unsafe sample
input : Get a serialize string in POST and unserialize it
Uses a number_float_filter via filter_var function
File : unsafe, use of untrusted data in an attribute name
-->
<!DOCTYPE html>
<html>
<body>
<?php
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$sanitized = filter_var($tainted, FILTER_SANITIZE_NUMBER_FLOAT);
if (filter_var($sanitized, FILTER_VALIDATE_FLOAT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
//flaw
echo "<div ". $tainted ."= bob />" ;
?>
<h1>Hello World!</h1>
</div>
</body>
</html>