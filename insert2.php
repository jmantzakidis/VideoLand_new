<?php
$servername="localhost";
$username="root";
$password='';
$dbname = "VIDEO_LAND";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}

$mname=$_POST['mname'];
$dir=$_POST['director'];
$ry=$_POST['rely'];
$sql="INSERT INTO movies(id,movie_name,director,release_year)
values('','$mname','$dir','$ry')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>