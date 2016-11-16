<?php
include 'Connections/connection.php';

$id = $_POST['s_id'];
echo $id;
$sql = "DELETE FROM story WHERE s_id='$id'";
$query = mysqli_query($conn, $sql);

echo "<script>";
echo "alert('Delete SuccessFully');";
echo "window.location ='index_1.php'; ";
echo "</script>";
?>