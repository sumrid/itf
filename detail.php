<?php 

require_once('Connections/connection.php');

$colname_detail = $_GET['s_id'];

// select data from story ---------------------------------
$query_detail = "SELECT * FROM story WHERE s_id = $colname_detail";
$detail = mysqli_query($conn, $query_detail);
$row_detail = mysqli_fetch_assoc($detail);

//count view page ----------------------------------------
$s_id = $row_detail['s_id'];
$s_view = $row_detail['s_view'];
$count = $s_view + 1;

$sql = "UPDATE story SET s_view=$count WHERE s_id = $colname_detail" ;
mysqli_query($conn, $sql);
//---------------------------------------------------------
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="icon.ico">
<title>Huanted Jinx</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<h1 align="center"><?php echo $row_detail['s_name']; ?></h1>
	<br>
	<p align="center">
        <img src="img/<?php echo $row_detail['s_pic']; ?>"/ class="img-responsive">
	</p>
	<br>
	<div class="container-fluid" align="center">
		<?php echo $row_detail['s_main']; ?>
	</div>
<hr>
  <p align="center">
    <a href="detail_full.php?s_id=<?php echo $row_detail['s_id']; ?>" class="btn btn-primary">Comment</a>
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </p>
	
  <p align="center"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> <?php echo $row_detail['s_view']; ?> Views</p>

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
</body>
</html>