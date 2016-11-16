<?php
include 'Connections/connection.php';

$name = $_POST["story_name"];
$story = $_POST["story"];
$file = $_FILES["img"]["name"];  // get file and $_FILES["xxxx"]["name"] <<< index["name"]

 // -------- upload img --------
$target_dir = "img/" . basename($_FILES["img"]["name"]);    // make location file 
move_uploaded_file($_FILES["img"]["tmp_name"], $target_dir);     // upload flie

// insert data from input --------
$insert = "INSERT INTO story (s_pic, s_name, s_main) VALUES ('$file', '$name', '$story')";
mysqli_query($conn, $insert);

// after insert upload -----------
echo "<script>";
echo "alert('Upload SuccessFully');";
echo "window.location ='contact.html'; ";
echo "</script>";
?>