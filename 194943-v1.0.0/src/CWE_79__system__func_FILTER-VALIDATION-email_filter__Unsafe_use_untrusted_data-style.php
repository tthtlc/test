<!-- 
Unsafe sample
input : execute a ls command using the function system, and put the last result in $tainted
Flushes content of $sanitized if the filter email_filter is not applied
File : unsafe, use of untrusted data in CSS
-->
<!DOCTYPE html>
<html>
<head>
<style>
<?php
$tainted = system('ls', $retval);
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;
//flaw
echo $tainted ;
?>
</style>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>