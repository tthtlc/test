<!-- 
Unsafe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : none
File : use of untrusted data in the body
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = shell_exec('cat /tmp/tainted.txt');
//no_sanitizing
//flaw
echo $tainted ;
?>
<h1>Hello World!</h1>
</body>
</html>
