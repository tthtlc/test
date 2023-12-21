<?php
/* 
Unsafe sample
input : use proc_open to read /tmp/tainted.txt
SANITIZE : use of mysql_real_escape string
construction : concatenation with simple quote
*/
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
$tainted = mysql_real_escape_string($tainted);
//flaw
$var = http_redirect("pages/'". $tainted . "'.php");
?>