<!-- 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : cast via + = 0.0
File : unsafe, use of untrusted data in an tag name
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = system('ls', $retval);
$tainted += 0.0 ;
echo "<".  $tainted ." href= \"/bob\" />" ;
?>
<h1>Hello World!</h1>
</body>
</html>