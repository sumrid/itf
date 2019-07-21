<?php

require_once('Connections/connection.php');

// select all data from story
$query_show_data = "SELECT * FROM story";
$show_data = mysqli_query($conn, $query_show_data);
$row_show_data = mysqli_fetch_assoc($show_data);
$totalRows_show_data = mysqli_num_rows($show_data);
?>

<!-- ============================================================================= -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="icon.ico">
	<title>Huanted Jinx</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style>
		body {
			background-image: url("img/back.jpg");
			background-attachment: fixed;
		}
	</style>
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
					<a class="navbar-brand" href="index.php">Huanted Jinx</a>
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

<br><br><br>
		<a href="index.php"><img src="img/header.jpg" width="100%"></a>   <!-- header img ======= -->
<br><br><br>
	<div class="container">
		<div class="row">

				<?php do { ?>
					<dir class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
<!--   href="detail.php?s_id=<?php echo $row_show_data['s_id']; ?>"     -->
						<a href="detail.php?s_id=<?php echo $row_show_data['s_id']; ?>" data-toggle="modal" data-target="#myModal">
							<img src="img/<?php echo $row_show_data['s_pic']; ?>" class="img-responsive img-rounded"/>
						</a>

						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel"></h4>
									</div>
									<div class="modal-body">
										
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">More to Comment</button>
									</div>
								</div>
							</div>
						</div>
					</dir>
				<?php } while ($row_show_data = mysqli_fetch_assoc($show_data)); ?>

		</div>
	</div>

<div class="container">
	<hr>
</div> 


			<footer>
				<p align="center">   
				<span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span> 
				2016 ITF Project, Huanted Jinx  
				<span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></p>
			</footer>

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
</body>
</html>