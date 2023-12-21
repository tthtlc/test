<!-- 
Unsafe sample
input : use shell_exec to cat /tmp/tainted.txt
Uses a full_special_chars_filter via filter_var function
File : unsafe, use of untrusted data in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$tainted = shell_exec('cat /tmp/tainted.txt');
$sanitized = filter_var($tainted, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $tainted = $sanitized ;
     
//flaw
echo $tainted ;
?>
</script>
</head>
<body onload="xss()">
<h1>Hello World!</h1>
</body>
</html>