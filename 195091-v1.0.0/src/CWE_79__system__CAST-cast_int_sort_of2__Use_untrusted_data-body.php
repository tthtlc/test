<!-- 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : cast via + = 0
File : use of untrusted data in the body
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = system('ls', $retval);
$tainted = $tainted + 0;
echo $tainted ;
?>
<h1>Hello World!</h1>
</body>
</html>
