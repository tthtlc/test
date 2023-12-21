<!-- 
Unsafe sample
input : execute a ls command using the function system, and put the last result in $tainted
Uses an email_filter via filter_var function
File : unsafe, use of untrusted data in CSS
-->
<!DOCTYPE html>
<html>
<head>
<style>
<?php
$tainted = system('ls', $retval);
$sanitized = filter_var($tainted, FILTER_SANITIZE_EMAIL);
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