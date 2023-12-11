<?php
$servername="localhost";
$username="root";
$password='';
$dbname="VIDEO_LAND";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}
$id=$_POST['delid'];
$sql="DELETE FROM CUSTOMERS WHERE $id=CUSTOMERS.CID";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>