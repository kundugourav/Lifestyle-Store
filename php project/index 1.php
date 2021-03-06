<?php
require 'common.php';
if (isset($_SESSION['email'])){
 header('location: product 1.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome | Lifestyle Store</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--bootstrap stylesheet-->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <!--glyphicon stylesheet-->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/glyphicon.css">
    <!--internal stylesheet-->
	<link rel="stylesheet" type="text/css" href="index 1.css">
</head>
<body>

	<!--navbar-->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		<a href="index 1.php" class="navbar-brand ml-md-5 pr-3 pl-3">Lifestyle Store</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-collapse" aria-controls="nav-collapse" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  		</button>

  		<div class="collapse navbar-collapse" id="nav-collapse"><hr>
		<ul class="navbar-nav ml-md-auto mr-md-5">
			<li class="nav-item pr-3 pl-3">
				<a href="signup 1.php" class="nav-link"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
			</li>
			<li class="nav-item pr-3 pl-3">
				<a href="login 1.php" class="nav-link"><span class="glyphicon glyphicon-log-in"></span> Login</a>
			</li>
		</ul>
		</div>
	</nav>
	<!--navbar end-->

	<!--body-->
	<div class="cover-image">
		<div class="inner-image">
			<div class="inner-background text-white">
				<h1>We sell lifestyle.</h1>
	   			<h6>Flat 40% OFF on premium brands</h6><br>
	   			<a href="login 1.php" class="btn btn-danger btn-lg">Shop Now</a>
			</div>
		</div>
	</div>

	<div class="container mt-5 mb-5">
		<div class="row">
			<div class="card-deck">
				<div class="card text-center">
					<a href="login 1.php#camera" class="text"><img class="card-img-top img-fluid img-thumbnail" src="image/camera.jpg" alt="Card image cap"></a>
    				<div class="card-body">
    				  <a href="login 1.php#camera" class="text"><h5 class="card-title"><b>Cameras</b></h5></a>
    				  <a href="login 1.php#camera" class="text"><p class="card-text"><b>Choose among the best available in the world.</b></p></a>
    				</div>
				</div>
				<div class="card text-center">
					<a href="login 1.php#watch" class="text"><img class="card-img-top img-fluid img-thumbnail" src="image/watch.jpg" alt="Card image cap"></a>
    				<div class="card-body">
    				  <a href="login 1.php#watch" class="text"><h5 class="card-title"><b>Watches</b></h5></a>
    				  <a href="login 1.php#watch" class="text"><p class="card-text"><b>Original watches from the best brands.</b></p></a>
    				</div>
				</div>
				<div class="card text-center">
					<a href="login 1.php#shirt" class="text"><img class="card-img-top img-fluid img-thumbnail" src="image/shirt.jpg" alt="Card image cap"></a>
    				<div class="card-body">
    				  <a href="login 1.php#shirt" class="text"><h5 class="card-title"><b>Shirts</b></h5></a>
    				  <a href="login 1.php#shirt" class="text"><p class="card-text"><b>Our exquisite collection of shirts.</b></p></a>
    				</div>
				</div>
			</div>
		</div>
	</div>
	<!--body end-->

	<!--footer-->
	<div class="text-center bg-dark text-white">
     	<p class="footer">Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
   	</div>
	<!--footer end-->

	<!--jquery-->
	<script src="bootstrap/js/jquery.js"></script>
    <!--javascript-->
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>