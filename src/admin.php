<?php
include 'Connections/connection.php';
$id = $_POST['admin'];
$pass = $_POST['pass'];

//select all data --------------
$sql = "SELECT * FROM story";
$query = mysqli_query($conn, $sql);
$show = mysqli_fetch_assoc($query);


if ($id != "admin" or $pass != "admin") {
	echo "<script>";
	echo "alert('แอดมินจริงเปล่า ??');";
	echo "window.location ='contact.html'; ";
	echo "</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="icon.ico">
    <title>For Admin</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header"><!-- Brand Nav ==================================================================== -->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index_1.php">Huanted Jinx</a>
				</div>

				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="pic.php">Gallery</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="contact.html">Contact</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<form class="navbar-form navbar-right" action="search.php" method="post">
							<div class="form-group">
							<input type="text" class="form-control" placeholder="ค้นหาเลยยย !!" name="txt">
								</div>
						<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>   Search!</button>
						</form>
					</ul>
				</div>
			</div>
		</nav>
<br><br>
  	<div class="container">
    <h1>Hello, Admin</h1>

    	<form method="post" action="upload.php" enctype="multipart/form-data">
			  <div class="form-group">
			    <label for="exampleInputEmail1">ชื่อ</label>
			    <input type="text" class="form-control" name="story_name" placeholder="ชื่อ" required="required">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">เนื้อหา</label>
			    <input type="text" class="form-control" name="story" placeholder="รายละเอียด" required="required">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputFile">File input</label>
			    <input type="file" name="img" required="required">
			    <p class="help-block">Upload img here...</p>
			  </div>
			  <button type="submit" class="btn btn-default">Upload</button>
			</form>
			<hr>
			<h2>Edit</h2>
			<div class="row">
			<?php do { ?>
				<div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img src="img/<?php echo $show["s_pic"]; ?>" alt="...">
			      <div class="caption">
			        <h3><?php echo $show["s_name"]; ?></h3>
			        <p>
			        	<a href="form_edit.php?s_id=<?php echo $show["s_id"]; ?>" class="btn btn-primary" role="button">Edit</a> 
			        <!--	<a href="#" class="btn btn-danger" role="button" data-toggle="modal" data-target="#myModal">Delete</a>  -->
			        </p>
			        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" id="myModalLabel">ลบข้อมูลนี้</h4>
							      </div>
							      <div class="modal-body">
							        แน่ใจหรือเปล่า ??
							      </div>
							        <a href="delete.php?s_id=<?php echo $show["s_id"]; ?>" class="btn btn-danger" role="button">แน่ใจสิ !!!</a>
							        <button type="button" class="btn btn-default" data-dismiss="modal">ไม่อะ</button>
							    </div>
							  </div>
							</div>

			      </div>
			    </div>
			  </div>
			<?php } while ($show = mysqli_fetch_assoc($query)); ?>
			</div>
			<hr>
			<footer>
				<p align="center">   
				<span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span> 
				2016 ITF Project, Huanted Jinx  
				<span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></p>
			</footer>
  	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>