<!-- 
Unsafe sample
input : reads the field UserData from the variable $_GET
Uses a full_special_chars_filter via filter_var function
File : use of untrusted data in a double quoted property value (CSS)
-->
<!DOCTYPE html>
<html>
<head>
<style>
<?php
$tainted = $_GET['UserData'];
$sanitized = filter_var($tainted, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $tainted = $sanitized ;
     
//flaw
echo "body { color :\"". $tainted ."\" ; }" ;
?>
</style> 
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>