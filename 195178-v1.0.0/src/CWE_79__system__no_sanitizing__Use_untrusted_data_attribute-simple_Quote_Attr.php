<!-- 
Unsafe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : none
File : use of untrusted data in a simple quote attribute
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = system('ls', $retval);
//no_sanitizing
//flaw
echo "<div id='".  $tainted ."'>content</div>" ;
?>
<h1>Hello World!</h1>
</body>
</html>