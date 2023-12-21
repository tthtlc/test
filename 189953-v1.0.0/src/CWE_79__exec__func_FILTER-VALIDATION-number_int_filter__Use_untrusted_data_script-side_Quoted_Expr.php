<!-- 
Safe sample
input : use exec to execute the script /tmp/tainted.php and store the output in $tainted
Flushes content of $sanitized if the filter number_int_filter is not applied
File : use of untrusted data in one side of a quoted expression in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$script = "/tmp/tainted.php";
exec($script, $result, $return);
$tainted = $result[0];
if (filter_var($sanitized, FILTER_VALIDATE_INT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
echo "x='". $tainted ."'" ;
?>
</script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>