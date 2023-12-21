<!-- 
Safe sample
input : use proc_open to read /tmp/tainted.txt
SANITIZE : use of preg_replace with another regex
File : unsafe, use of untrusted data in an attribute name
-->
<!DOCTYPE html>
<html>
<body>
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
$tainted = preg_replace('/\W/si','',$tainted);
echo "<div ". $tainted ."= bob />" ;
?>
<h1>Hello World!</h1>
</div>
</body>
</html>