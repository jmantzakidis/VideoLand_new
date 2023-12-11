<?php
$servername="localhost";
$username="root";
$password='';
$dbname = "VIDEO_LAND";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE MOVIES (
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
MOVIE_NAME VARCHAR(30) NOT NULL,
DIRECTOR VARCHAR(30) NOT NULL,
RELEASE_YEAR VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MOVIES created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>