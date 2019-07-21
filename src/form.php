<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="icon.ico">
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<div class="container text-center">

		<form class="form-horizontal" action="insertcomment.php" method="post">
			<div class="form-group">
				<div class="col-sm-2"></div>
				<label class="col-sm-2">Name:</label>
				<div class="col-sm-4">
					<input type="text" name="name" class="form-control" placeholder="ชื่อไร ใส่เลยย !" required="required" cols="60">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-2"></div>
				<label class="col-sm-2">Comment:</label>
				<div class="col-sm-4">
					<textarea class="form-control" name="comment" placeholder="คอมเม้นเลย จัดไป" required="required" cols="60"></textarea>
				</div>
			</div>
			<input type="hidden" name="story_id" value="<?php echo $colname_detail ;?>">
			<div class="form-group">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
      		<button type="submit" class="btn btn-primary">Comment</button>
    		</div>
			</div>
		</form>

	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>