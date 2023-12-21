<!-- 
Unsafe sample
input : execute a ls command using the function system, and put the last result in $tainted
SANITIZE : use of preg_replace
File : unsafe, use of untrusted data in a property value in a span tag(CSS)
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = system('ls', $retval);
$tainted = preg_replace('/\'/', '', $tainted);
//flaw
echo "<span style=\"color :". checked_data ."\">Hey</span>" ;
?>
<h1>Hello World!</h1>
</body>
</html>