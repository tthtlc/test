<!-- 
Unsafe sample
input : Uses popen to read the file /tmp/tainted.txt using cat command
Uses a magic_quotes_filter via filter_var function
File : use of untrusted data in a double quoted property value (CSS)
-->
<!DOCTYPE html>
<html>
<head>
<style>
<?php
$handle = popen('/bin/cat /tmp/tainted.txt', 'r');
$tainted = fread($handle, 4096);
pclose($handle);
$sanitized = filter_var($tainted, FILTER_SANITIZE_MAGIC_QUOTES);
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