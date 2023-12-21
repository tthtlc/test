<!-- 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : use of ternary condition
File : use of untrusted data in a quoted event handler in a script
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = system('ls', $retval);
$tainted = $tainted  == 'safe1' ? 'safe1' : 'safe2';
echo "<div onmouseover=\"x='". $tainted ."'\>";
?>
<h1>Hello World!</h1>
</div>
</body>
</html>