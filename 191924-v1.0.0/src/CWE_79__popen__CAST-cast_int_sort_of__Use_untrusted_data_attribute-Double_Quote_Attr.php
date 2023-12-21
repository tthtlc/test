<!-- 
Safe sample
input : Uses popen to read the file /tmp/tainted.txt using cat command
sanitize : cast via + = 0
File : use of untrusted data in a doubled quote attribute
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$handle = popen('/bin/cat /tmp/tainted.txt', 'r');
$tainted = fread($handle, 4096);
pclose($handle);
$tainted += 0 ;
echo "<div id=\"". $tainted ."\">content</div>" ;
?>
<h1>Hello World!</h1>
</body>
</html>