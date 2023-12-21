<!-- 
Safe sample
input : use exec to execute the script /tmp/tainted.php and store the output in $tainted
Flushes content of $sanitized if the filter number_int_filter is not applied
File : use of untrusted data in a simple quote attribute
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$script = "/tmp/tainted.php";
exec($script, $result, $return);
$tainted = $result[0];
if (filter_var($sanitized, FILTER_VALIDATE_INT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
echo "<div id='".  $tainted ."'>content</div>" ;
?>
<h1>Hello World!</h1>
</body>
</html>