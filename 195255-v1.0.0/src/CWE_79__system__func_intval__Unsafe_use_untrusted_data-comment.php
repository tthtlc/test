<!-- 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : use of intval
File : unsafe, use of untrusted data in a comment
-->
<!DOCTYPE html>
<html>
<head>
<!--
<?php
$tainted = system('ls', $retval);
$tainted = intval($tainted);
echo $tainted ;
?>
-->
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>