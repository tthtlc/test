<!-- 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : cast via + = 0.0
File : use of untrusted data in the body
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted += 0.0 ;
echo $tainted ;
?>
<h1>Hello World!</h1>
</body>
</html>
