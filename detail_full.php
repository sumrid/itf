<?php

include 'Connections/connection.php';

$colname_detail = $_GET['s_id'];

// select data from story ---------------------------------------
$query_detail = "SELECT * FROM story WHERE s_id = $colname_detail";
$detail = mysqli_query($conn, $query_detail);
$row_detail = mysqli_fetch_assoc($detail);

// select data from comment table -------------------------------
$comment = "SELECT * FROM comment WHERE c_story_id = $colname_detail ORDER BY c_time";
$query_comment = mysqli_query($conn, $comment);
$row_comment = mysqli_fetch_assoc($query_comment);
$num = mysqli_num_rows($query_comment);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="icon.ico">
<title>Huanted Jinx - <?php echo $row_detail['s_name'];?></title>
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
				</div><!--/.nav-collapse -->
			</div>
		</nav>
<br><br>


<!-- ================================================================ -->
	<h1 align="center"><?php echo $row_detail['s_name']; ?></h1>
	<br>
	<p align="center">
		<img src="img/<?php echo $row_detail['s_pic']; ?>"/ class="img-responsive img-rounded">
	</p>
	<br>

<div class="container-fluid" align="center">
	<div class="row">
			<div class="col-md-2 col-lg-2"></div> <!-- space -->

			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<?php echo $row_detail['s_main']; ?>   <!-- ============ show full story ============ -->
				<br><br>
				<p align="right">
				<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> <?php echo $row_detail['s_view']; ?> Views
				</p>  <!-- page view ====== -->
			</div>

			<div class="col-md-2 col-lg-2"></div> <!-- space -->
	</div>
</div>
<!-- ================== comment ================= -->
<div class="container">
	<p align="center">Comment ... about <strong><?php echo $row_detail['s_name']; ?>  </strong><span class="glyphicon glyphicon-pencil"></span></p>
	<br><br>

	<?php if ($num > 0) {
		do { ?>    <!-- loop show comment -->
		<div class="row">
			<div class="col-md-3 col-lg-3"></div>
			<div class="col-md-6 col-lg-6 text-center">
			<span class="glyphicon glyphicon-user" aria-hidden="true"></span> :  <?php echo $row_comment['c_name']; ?>
			<br>
			------------------------------------------------------------------------
			<br>
			<?php echo $row_comment['c_comment']; ?>
			<br>
			------------------------------------------------------------------------
			<br>
			<span class="glyphicon glyphicon-time" aria-hidden="true"></span>  <?php echo $row_comment['c_time']; ?>
			</div>
			<div class="col-md-3 col-lg-3"></div>
		</div><br><br>
	<?php } while ($row_comment = mysqli_fetch_assoc($query_comment));
	} else { ?>    <!-- loop -->
		<p align="center"><em>No comment</em></p>
	<?php } ?>
	<div class="row">
		<div class="col-md-2 col-lg-2"></div>
		<hr>
		<div class="col-md-8 col-lg-8">
			<?php include 'form.php';?>   <!-- form input comment -->
		</div>
		<div class="col-md-2 col-lg-2"></div>
	</div>
</div>


<!-- ================== comment facbook 
<div class="container">
  <div id="fb-root"></div>  
<script>(function(d, s, id) {  
  var js, fjs = d.getElementsByTagName(s)[0];  
  if (d.getElementById(id)) {return;}  
  js = d.createElement(s); js.id = id;  
  js.src = "//connect.facebook.net/th_TH/all.js#xfbml=1";  
  fjs.parentNode.insertBefore(js, fjs);  
}(document, 'script', 'facebook-jssdk'));  
</script>  
<center><div class="fb-comments" data-href="detail.php?s_id=<?php echo $row_detail['s_id']; ?>" data-num-posts="20" data-width="500"></div></center>
</div>
=============== -->


<!-- ============ footer =============-->
<div class="container">
	<hr>
</div>
	<footer>
		<p align="center">   
		<span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span> 
		2016 IFT Project, Huanted Jinx  
		<span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></p>
	</footer>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
