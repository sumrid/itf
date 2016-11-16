<?php
include 'Connections/connection.php';

$search = $_POST["txt"];

// search data from database -----------------------------------------------
$form = "SELECT * FROM story WHERE s_name LIKE '%$search%' OR s_main LIKE '%$search%'";
$re = mysqli_query($conn, $form);
$show = mysqli_fetch_assoc($re);
$totalRows = mysqli_num_rows($re);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="icon.ico">
	<title>Huanted Jinx - Search</title>
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
				</div><!--/.nav-collapse -->
			</div>
		</nav>
<div class="container"><br><br>
	<h2 class="text-center">Results</h2>

		<div class="row">
			<?php if ($totalRows > 0) {
			do { ?>
	  			<div class="col-sm-6 col-md-4">
	    			<div class="thumbnail">
	      			<img src="img/<?php echo $show['s_pic']; ?>" alt="...">
	      			<div class="caption">
	        			<h3><?php echo $show['s_name']; ?></h3>
	        			<p><a href="detail_full.php?s_id=<?php echo $show['s_id']; ?>" class="btn btn-primary" role="button">See More</a></p>
	      			</div>
	    			</div>
	  			</div>
			<?php } while ($show = mysqli_fetch_assoc($re)); 
			} else { ?>
				<p align="center"><em>No results</em></p>
			<?php } ?>
		</div>

		<hr>
			<footer>
				<p align="center">   
				<span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span> 
				2016 ITF Project, Huanted Jinx  
				<span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></p>
			</footer>
		</div>

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
</body>
</html>