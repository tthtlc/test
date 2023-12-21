<!-- 
Unsafe sample
input : get the field UserData from the variable $_POST
Flushes content of $sanitized if the filter number_int_filter is not applied
File : unsafe, use of untrusted data in CSS
-->
<!DOCTYPE html>
<html>
<head>
<style>
<?php
$tainted = $_POST['UserData'];
if (filter_var($sanitized, FILTER_VALIDATE_INT))
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