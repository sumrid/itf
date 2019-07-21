<?php   

// >>>> insert comment to table comment <<<<
include 'Connections/connection.php';

$name = $_POST["name"];
$comment = $_POST["comment"];
$story = $_POST["story_id"];

echo $name;
echo $comment;
echo $story;


// insert here ...
$sql = "INSERT INTO comment (c_story_id, c_name, c_comment)
VALUES ('$story', '$name', '$comment')";

mysqli_query($conn, $sql);
// after insert comment -----------
			echo "<script>";
			echo "alert('Comment SuccessFully');";
			echo "window.location ='detail_full.php?s_id=$story'; ";
			echo "</script>";
?>