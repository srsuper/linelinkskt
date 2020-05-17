
<?php
$mysqli = new mysqli("localhost","root","","internat_messenger");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>
