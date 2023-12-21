<!-- 
Unsafe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
Flushes content of $sanitized if the filter number_float_filter is not applied
File : unsafe, use of untrusted data in an tag name
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = `cat /tmp/tainted.txt`;
if (filter_var($sanitized, FILTER_VALIDATE_FLOAT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
//flaw
echo "<".  $tainted ." href= \"/bob\" />" ;
?>
<h1>Hello World!</h1>
</body>
</html>