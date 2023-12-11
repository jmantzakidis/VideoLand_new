<?php
$servername="localhost";
$username="root";
$password='';
$dbname="VIDEO_LAND";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$result=mysqli_query($conn,"SELECT * FROM MOVIES");
$row=mysqli_fetch_array($result);
?>

<table width="100%" border>
           <tr>
                <th>MOVIE ID
                <th>MOVIE NAME
                <th>DIRECTOR
                <th>RELEASE YEAR
            </tr>
<link rel="stylesheet" href="css/styles.css">
<img src="images/logofinal.jpg" class="center">
<h2>Available Movies</h2>
<?php
while($row){
	echo"<tr><td>".$row['ID']."</td>";
	echo"<td>".$row['MOVIE_NAME']."</td>";
	echo"<td>".$row['DIRECTOR']."</td>";
	echo"<td>".$row['RELEASE_YEAR']."</td>";
	echo"</tr>";
    $row=mysqli_fetch_array($result);
} 
?>