<!-- 
Unsafe sample
input : use exec to execute the script /tmp/tainted.php and store the output in $tainted
Flushes content of $sanitized if the filter email_filter is not applied
File : unsafe, use of untrusted data in a comment
-->
<!DOCTYPE html>
<html>
<head>
<!--
<?php
$script = "/tmp/tainted.php";
exec($script, $result, $return);
$tainted = $result[0];
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;
//flaw
echo $tainted ;
?>
-->
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>