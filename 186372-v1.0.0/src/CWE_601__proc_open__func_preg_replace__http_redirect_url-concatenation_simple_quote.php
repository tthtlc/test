<?php
/* 
Unsafe sample
input : use proc_open to read /tmp/tainted.txt
SANITIZE : use of preg_replace
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
$tainted = preg_replace('/\'/', '', $tainted);
//flaw
$var = http_redirect("'" . $tainted . "'");
?>