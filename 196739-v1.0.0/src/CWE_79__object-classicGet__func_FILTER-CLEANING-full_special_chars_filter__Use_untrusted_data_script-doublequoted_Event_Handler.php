<!-- 
Safe sample
input : get the field userData from the variable $_GET via an object
Uses a full_special_chars_filter via filter_var function
File : use of untrusted data in a double quoted event handler in a script
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
class Input{
  private $input;
  public function getInput(){
    return $this->input;
  }
  public  function __construct(){
   $this->input = $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$sanitized = filter_var($tainted, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $tainted = $sanitized ;
     
echo "<div onmouseover=\"x=\"". $tainted ."\"\>";
?>
<h1>Hello World!</h1>
</div>
</body>
</html>