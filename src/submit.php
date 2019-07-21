<meta charset="UTF-8" />
<?php
include('Connections/con_data.php');

$user_name = $_POST['user_name'];
$ment = $_POST['ment'];

$check ="SELECT * FROM comment  WHERE user_name='$ment'";
$result1=mysql_db_query($database_con_data, $check);
$num=mysql_num_rows($result1);

if($num > 0)
{
			echo "<script>";
			echo "alert('user นีมีผู้ใช้แล้ว');";
			echo "window.location ='index.php'; ";
			echo "</script>";

} else {


$sql ="INSERT INTO comment
		
		(user_name,  ment)
		
		VALUES
		
		('$user_name', '$ment')";
		
		$result = mysql_db_query($database_con_data, $sql) or die("Error in query : $sql" .mysql_error());
}

		mysql_close();
		
		if($result){
			echo "<script>";
			echo "alert('SuccessFully');";
			echo "window.location ='index.php'; ";
			echo "</script>";
		} else {
			
			echo "<script>";
			echo "alert('ERROR!');";
			echo "window.location ='index.php'; ";
			echo "</script>";
		}
		


?>