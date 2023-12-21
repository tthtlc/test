<!-- 
Unsafe sample
input : Uses popen to read the file /tmp/tainted.txt using cat command
Flushes content of $sanitized if the filter number_int_filter is not applied
File : unsafe, use of untrusted data in CSS
-->
<!DOCTYPE html>
<html>
<head>
<style>
<?php
$handle = popen('/bin/cat /tmp/tainted.txt', 'r');
$tainted = fread($handle, 4096);
pclose($handle);
if (filter_var($sanitized, FILTER_VALIDATE_INT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
//flaw
echo $tainted ;
?>
</style>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>