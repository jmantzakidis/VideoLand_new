<?php
$servername="localhost";
$username="root";
$password='';
$dbname="VIDEO_LAND";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}
$sql = "CREATE TABLE CUSTOMERS (
	CID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	FIRST_NAME VARCHAR(30) NOT NULL,
	LAST_NAME VARCHAR(30) NOT NULL,
	TELEPHONE VARCHAR(50) NOT NULL,
	EMAIL VARCHAR(50) NOT NULL,
	MID INT(6) UNSIGNED
	)";
if($conn->query($sql) == TRUE){
	echo "Table CUSTOMERS created successfully";
}
else{
	echo "Error creating table CUSTOMERS" . $conn->error;
}
$conn->close();
?>