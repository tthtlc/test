<!-- 
Unsafe sample
input : use shell_exec to cat /tmp/tainted.txt
Uses a magic_quotes_filter via filter_var function
File : use of untrusted data in a div tag
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<div>
<?php
$tainted = shell_exec('cat /tmp/tainted.txt');
$sanitized = filter_var($tainted, FILTER_SANITIZE_MAGIC_QUOTES);
  $tainted = $sanitized ;
      
//flaw
echo $tainted ;
?>
</div>
<h1>Hello World!</h1>
</body>
</html>