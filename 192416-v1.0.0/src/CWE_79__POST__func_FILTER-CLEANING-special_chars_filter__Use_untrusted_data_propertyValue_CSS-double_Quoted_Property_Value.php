<!-- 
Unsafe sample
input : get the field UserData from the variable $_POST
Uses a special_chars_filter via filter_var function
File : use of untrusted data in a double quoted property value (CSS)
-->
<!DOCTYPE html>
<html>
<head>
<style>
<?php
$tainted = $_POST['UserData'];
$sanitized = filter_var($tainted, FILTER_SANITIZE_SPECIAL_CHARS);
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