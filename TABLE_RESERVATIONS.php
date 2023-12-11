<?php
$servername="localhost";
$username="root";
$password='';
$dbname="VIDEO_LAND";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}
$sql = "CREATE TABLE RESERVATIONS (
	RID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    CID INT(6) UNSIGNED,
    MID INT(6) UNSIGNED,
	FIRST_NAME VARCHAR(30) NOT NULL,
	LAST_NAME VARCHAR(30) NOT NULL,
	TELEPHONE VARCHAR(50) NOT NULL,
	MNAME VARCHAR(50) NOT NULL,
    DIRECTOR VARCHAR(50) NOT NULL
	)";
if($conn->query($sql) == TRUE){
	echo "Table RESERVATIONS created successfully";
}
else{
	echo "Error creating table RESERVATIONS" . $conn->error;
}
$conn->close();
?>