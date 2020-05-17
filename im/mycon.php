
<?php
$mysqli = new mysqli("sql12.freemysqlhosting.net","sql12340596","wpetblKIfN","sql12340596");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>
