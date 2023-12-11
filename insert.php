<?php
$servername="localhost";
$username="root";
$password='';
$dbname="VIDEO_LAND";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}
$mid=$_POST['mid'];
$fname=$_POST['first'];
$lname=$_POST['last'];
$mail=$_POST['email'];
$phone=$_POST['phone'];
$sql="INSERT INTO customers(cid,mid,first_name,last_name,telephone,email)
values('','$mid','$fname','$lname','$phone','$mail')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>