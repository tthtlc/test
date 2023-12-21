<!-- 
Unsafe sample
input : Get a serialize string in POST and unserialize it
Uses a number_int_filter via filter_var function
File : unsafe, use of untrusted data in a quoted property value (CSS)
-->
<!DOCTYPE html>
<html>
<head>
<style>
<?php
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$sanitized = filter_var($tainted, FILTER_SANITIZE_NUMBER_INT);
if (filter_var($sanitized, FILTER_VALIDATE_INT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
//flaw
echo "body { color :\'". $tainted ."\' ; }" ;
?>
</style> 
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>