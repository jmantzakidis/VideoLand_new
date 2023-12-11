<?php
$servername="localhost";
$username="root";
$password='';
$dbname="VIDEO_LAND";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$result=mysqli_query($conn,"SELECT * FROM CUSTOMERS");
$row=mysqli_fetch_array($result);
?>

<h2>Customer List</h2>
<table width="100%" border>
           <tr>
                <th>CUSTOMER ID
                <th>MOVIE ID
                <th>FIRST NAME
                <th>LAST NAME
                <th>TELEPHONE
                <th>EMAIL
            </tr>
            <?php
while($row){
	echo"<tr><td>".$row['CID']."</td>";
	echo"<td>".$row['MID']."</td>";
	echo"<td>".$row['FIRST_NAME']."</td>";
    echo"<td>".$row['LAST_NAME']."</td>";
    echo"<td>".$row['TELEPHONE']."</td>";
    echo"<td>".$row['EMAIL']."</td>";
	echo"</tr>";
    $row=mysqli_fetch_array($result);
} 
?> 
 <link rel="stylesheet" href="css/styles.css">
<h3>Give ID to Delete or Add</h3>
<form action="save.php" method="POST" target="_blank">
<input type="text" name="id">
<input type="submit" value="Save">
</form>
<form action="delete.php" method="POST" target="_blank">
<input type="text" name="delid">
<input type="submit" value="Delete">
</form>
<p>In case you want to delete an active reservation first delete it form the reservations table and then from table customers.</p>
<br>
<br>
