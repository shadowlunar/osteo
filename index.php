<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <?php include 'includes/header_1.php';?>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>OSTEO SIN MAX</title>
</head>
<body>
<?php include 'includes/header_2.php';?>


<div class="container">
  <h2>Carousel Example</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/HEPATOGENOL.jpg" alt="Los Angeles" >
      </div>

      <div class="item">
        <img src="img/oste.jpg" alt="Chicago" >
      </div>
    
      <div class="item">
        <img src="img/OSTEO_SIN_MAX.jpg" alt="New york" >
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<?php include 'includes/footer_2.php';?>
<?php include 'includes/footer_1.php';?>
</body>
</html>

