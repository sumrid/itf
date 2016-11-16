<?php

include 'Connections/connection.php';

$s_id = $_GET['s_id'];

$sql = "SELECT * FROM story WHERE s_id = $s_id";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit - <?php echo $row["s_name"]; ?></title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  <div class="container">
    <h1>Edit - <?php echo $row["s_name"]; ?></h1>
  	<hr>
  	<div class="row">
  		<div class="col-md-3"></div><!-- ========= space =============== -->
  		<div class="col-md-6">
  			<form action="edit.php" method="post"> <!-- form edit ======================== -->
				  <div class="form-group">
				    <label for="exampleInputEmail1">ชื่อ</label>
				    <input type="text" class="form-control" readonly="readonly"
				    placeholder="<?php echo $row["s_name"]; ?>">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">เนื้อหา</label>
				    <textarea class="form-control" rows="20" name="story">
				    	<?php echo $row["s_main"]; ?>
				    </textarea>
				    <input type="hidden" name="id" value="<?php echo $row["s_id"]; ?>">
				  </div>
				  <button type="submit" class="btn btn-default">แก้ไข</button>
				</form>
        <form action="delete.php" method="post">
          <input type="hidden" name="s_id" value="<?php echo $row["s_id"]; ?>">
          <button type="submit" class="btn btn-danger">ลบข้อมูล</button>
        </form>
  		</div>
  		<div class="col-md-3"></div>   <!-- ========= space =============== -->
  	</div>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>