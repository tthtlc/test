<!-- 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
SANITIZE : use of rawurlencode
File : use of untrusted data in a div tag
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<div>
<?php
$tainted = system('ls', $retval);
$tainted = rawurlencode($tainted);
echo $tainted ;
?>
</div>
<h1>Hello World!</h1>
</body>
</html>