<!-- 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
Flushes content of $sanitized if the filter number_int_filter is not applied
File : use of untrusted data in a double quoted event handler in a script
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = system('ls', $retval);
if (filter_var($sanitized, FILTER_VALIDATE_INT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
echo "<div onmouseover=\"x=\"". $tainted ."\"\>";
?>
<h1>Hello World!</h1>
</div>
</body>
</html>