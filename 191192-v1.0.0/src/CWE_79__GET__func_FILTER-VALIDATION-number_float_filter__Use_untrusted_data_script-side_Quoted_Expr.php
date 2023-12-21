<!-- 
Safe sample
input : reads the field UserData from the variable $_GET
Flushes content of $sanitized if the filter number_float_filter is not applied
File : use of untrusted data in one side of a quoted expression in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$tainted = $_GET['UserData'];
if (filter_var($sanitized, FILTER_VALIDATE_FLOAT))
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