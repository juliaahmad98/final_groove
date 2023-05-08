
<?php

/// $hn = "localhost";
/// $un = "root";
/// $pw = "";
/// $db = "groove";

$hn = 'localhost';
$db = 'jahmad11_638';
$un = 'jahmad11_mysql';
$pw = 'bzGr5I5XEf8S';


// Create connection
$conn = new mysqli($hn, $un, $pw, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else {
  echo "";
}
?>
