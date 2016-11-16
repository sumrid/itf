<?php
include 'Connections/connection.php';

$story = $_POST['story'];
$id = $_POST['id'];
echo $story;
$sql = "UPDATE story SET s_main='$story' WHERE s_id='$id'";
$query = mysqli_query($conn, $sql);

echo "<script>";
echo "alert('Update SuccessFully');";
echo "window.location ='index_1.php'; ";
echo "</script>";
?>