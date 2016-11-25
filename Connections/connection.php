<?php
$servername = "localhost";
$username = "u366655475_sum";
$password = "81555084";
$dbname = "u366655475_haunt";

   # Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
