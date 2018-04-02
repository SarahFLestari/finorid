<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
		<title>Selamat Datang</title>
		<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<script type="js/jquery-3.2.1.min.js"></script>
		<script type="css/bootstrap/js/bootstrap.js"></script>
	</head>
	<body>
	<nav class="row container-fluid">
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <ul class="nav navbar-nav">
		    <?php if (!isset($_SESSION['login_user'])){
		    echo '<li><a href="preorder.php">Pre-Order</a></li>';
		      	} ?>
		      <li><a href="inputorder.php">Input Order</a></li>	
		      <li><a href="#">View Order</a></li>
		      <li><a href="#">Tentang Kami</a></li>
		      <li><a href="#">Kontak</a></li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
      			<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>
   			 </ul>
		  </div>
		</nav>
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
		      <img src=img/baju2.png alt="Clothing" class="img-responsive">
		      	<div class="carousel-caption">
        			<h3>FinOr</h3>
        			<p>Lebih Mudah Lebih Baik</p>
      			</div>
		    </div>
		    <div class="item">
		      <img src=img/baju3.png alt="Clothing">
		    </div>
		    <div class="item">
		      <img src=img/baju4.png alt="Clothing">
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
		<div class="row persegipanjang">
			<p> Dashboard </p>
		</div>
	</nav>

	</body>
</html>