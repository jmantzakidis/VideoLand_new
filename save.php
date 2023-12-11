<?php
$servername="localhost";
$username="root";
$password='';
$dbname = "VIDEO_LAND";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}
$id=$_POST['id'];
$sql="INSERT INTO RESERVATIONS (CID,MID,FIRST_NAME,LAST_NAME,TELEPHONE,EMAIL)
      SELECT CID,MID,FIRST_NAME,LAST_NAME,TELEPHONE,EMAIL
      FROM CUSTOMERS
      WHERE $id=CUSTOMERS.CID";
if ($conn->query($sql) === TRUE) {
    echo "Record saved successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>