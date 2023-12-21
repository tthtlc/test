<!-- 
Unsafe sample
input : use proc_open to read /tmp/tainted.txt
sanitize : use of the function htmlentities. Sanitizes the query but has a high chance to produce unexpected results
File : unsafe, use of untrusted data in a quoted property value (CSS)
-->
<!DOCTYPE html>
<html>
<head>
<style>
<?php
$descriptorspec = array(
  0 => array("pipe", "r"),
  1 => array("pipe", "w"),
  2 => array("file", "/tmp/error-output.txt", "a")
  );
$cwd = '/tmp';
$process = proc_open('more /tmp/tainted.txt', $descriptorspec, $pipes, $cwd, NULL);
if (is_resource($process)) {
  fclose($pipes[0]);
  $tainted = stream_get_contents($pipes[1]);
  fclose($pipes[1]);
  $return_value = proc_close($process);
}
$tainted = htmlentities($tainted, ENT_QUOTES);
//flaw
echo "body { color :\'". $tainted ."\' ; }" ;
?>
</style> 
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>