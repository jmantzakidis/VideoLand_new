<?php
$servername="localhost";
$username="root";
$password='';
$conn= new mysqli($servername,$username,$password);
if($conn -> connect_error)
{
	die("Connection failed:" . $conn->connect_error);
}
$sql="CREATE DATABASE VIDEO_LAND";
if($conn->query($sql)==TRUE){
	echo "Database VIDEO_LAND created successfully";
}
else{
	echo "Error creating database VIDEO_LAND" . $conn->error;
}
$conn->close();

?>