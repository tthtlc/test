<!-- 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
SANITIZE : use of preg_replace with another regex
File : use of untrusted data in a doubled quote attribute
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = system('ls', $retval);
$tainted = preg_replace('/\W/si','',$tainted);
echo "<div id=\"". $tainted ."\">content</div>" ;
?>
<h1>Hello World!</h1>
</body>
</html>