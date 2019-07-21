<?php

include 'Connections/connection.php';

//select img from database
$query = "SELECT * FROM gall";
$select = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($select);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="icon.ico">
    <title>Huanted Jinx - Gallery</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        background-image: url("img/back.jpg");
        background-attachment: fixed;
      }
    </style>
  </head>

  <body> <!-- ================================== body ===================== -->

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
            <li class="active"><a href="pic.php">Gallery</a></li>
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
<br><br><br><br>
    <div class="container">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators  -->
  <!--      <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>   -->

      <div class="carousel-inner" role="listbox">  <!-- Wrapper for slides -->
        <div class="item active">
          <img src="img/index.jpg" alt="...">
            <div class="carousel-caption">
            ...
            </div>
        </div>

        <?php do { ?>
          <div class="item" align="center">
            <img src="gall/<?php echo $row['g_pic'] ?>" alt="..." class="img-thumbnail img-rounded">
            <div class="carousel-caption">
            <h4><?php echo $row['g_name'] ?></h4>
            </div>
          </div>
        <?php } while ($row = mysqli_fetch_assoc($select)); ?>
      </div>  <!-- Wrapper for slides -->

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>