<?php
$servername="localhost";
$username="root";
$password='';
$dbname="VIDEO_LAND";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}
$sql = "ALTER TABLE CUSTOMERS 
	    ADD CONSTRAINT FK_CUSTOMERS
        FOREIGN KEY(MID) REFERENCES MOVIES(ID)
	";
if($conn->query($sql) == TRUE){
	echo "FK created successfully";
}
else{
	echo "Error creating FK" . $conn->error;
}
$conn->close();
?>