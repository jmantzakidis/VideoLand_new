<?php
$servername="localhost";
$username="root";
$password='';
$dbname="VIDEO_LAND";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}
$sql = "ALTER TABLE RESERVATIONS 
	    ADD CONSTRAINT FK_CUSTOMER_RESERVATIONS
        FOREIGN KEY(CID) REFERENCES CUSTOMERS(CID)
	";
if($conn->query($sql) == TRUE){
	echo "FK created successfully";
}
else{
	echo "Error creating FK" . $conn->error;
}
$conn->close();
?>