<?php
$user = $_POST['un'];
$pass = $_POST['pwd'];
if($user=="Admin"&& $pass=="12345")
{
    echo "Welcome Admin";
}
else
{
    echo "Wrong User Id or Password";
}
?>

 <link rel="stylesheet" href="css/styles.css">
 <br>
 <br>
<a href="showmovies.php" class="button2" target="_blank">Show Movies</a>
<br>
<br>
<a href="insert_movie.php" class="button2" target="_blank">Add Movie</a>
<br>
<br>
<a href="showcustomers.php" class="button2" target="_blank">Show Customers</a>
<br>
<br>
<a href="showreservations.php" class="button2" target="_blank">Show Active Reservations</a>
<br>
<br>
<a href="index.html" class="button2">HomePage</a>

