<!-- 
Safe sample
input : get the UserData field of $_SESSION
Flushes content of $sanitized if the filter number_float_filter is not applied
File : use of untrusted data in a simple quoted string in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$tainted = $_SESSION['UserData'];
if (filter_var($sanitized, FILTER_VALIDATE_FLOAT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
echo "alert('". $tainted ."')" ;
?>
</script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>