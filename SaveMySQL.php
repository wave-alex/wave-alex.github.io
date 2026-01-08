
<?php
$servername = "sql213.yabi.me";
$username = "yabi_29197924";
$password = "xdr3bhu7";
$dbname = "yabi_29197924_RJC";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql_str = "INSERT INTO rjc_db(fitem, ftel, fnote) VALUES ('user3','3456789','test 03')";

if ($conn->query($sql_str) == TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql_str . "<br>" . $conn->error;
}

$conn->close();
?>