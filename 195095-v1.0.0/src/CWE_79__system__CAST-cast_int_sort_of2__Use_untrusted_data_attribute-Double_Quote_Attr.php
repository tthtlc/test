<!-- 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : cast via + = 0
File : use of untrusted data in a doubled quote attribute
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = system('ls', $retval);
$tainted = $tainted + 0;
echo "<div id=\"". $tainted ."\">content</div>" ;
?>
<h1>Hello World!</h1>
</body>
</html>