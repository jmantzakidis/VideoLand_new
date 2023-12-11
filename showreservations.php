<?php
$servername="localhost";
$username="root";
$password='';
$dbname="VIDEO_LAND";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$result=mysqli_query($conn,"SELECT * FROM RESERVATIONS");
$row=mysqli_fetch_array($result);
?>
 <link rel="stylesheet" href="css/styles.css">
<h2>Active Reservations List</h2>
<table width="100%" border>
           <tr>
                <th>RESERVATION ID
                <th>CUSTOMER ID
                <th>MOVIE ID
                <th>FIRST NAME
                <th>LAST NAME
                <th>TELEPHONE
                <th>EMAIL
            </tr>
            <?php
while($row){
	echo"<tr><td>".$row['RID']."</td>";
	echo"<td>".$row['CID']."</td>";
    echo"<td>".$row['MID']."</td>";
    echo"<td>".$row['FIRST_NAME']."</td>";
    echo"<td>".$row['LAST_NAME']."</td>";
    echo"<td>".$row['TELEPHONE']."</td>";
    echo"<td>".$row['EMAIL']."</td>";
	echo"</tr>";
    $row=mysqli_fetch_array($result);
} 
?> 
<form action="delete_res.php" method="POST" target="_blank">
<input type="text" name="delid">
<input type="submit" value="Delete">
</form>