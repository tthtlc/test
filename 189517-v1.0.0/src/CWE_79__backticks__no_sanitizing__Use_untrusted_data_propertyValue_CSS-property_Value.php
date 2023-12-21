<!-- 
Unsafe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : none
File : use of untrusted data in a property value (CSS)
-->
<!DOCTYPE html>
<html>
<head>
<style>
<?php
$tainted = `cat /tmp/tainted.txt`;
//no_sanitizing
//flaw
echo "body { color :". $tainted ." ; }" ;
?>
 </style> 
 </script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>