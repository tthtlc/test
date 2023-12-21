<!-- 
Unsafe sample
input : execute a ls command using the function system, and put the last result in $tainted
SANITIZE : use of urlencode
File : unsafe, use of untrusted data in an attribute name
-->
<!DOCTYPE html>
<html>
<body>
<?php
$tainted = system('ls', $retval);
$tainted = urlencode($tainted);
//flaw
echo "<div ". $tainted ."= bob />" ;
?>
<h1>Hello World!</h1>
</div>
</body>
</html>