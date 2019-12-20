<?php
require 'common.php';
if (!isset($_SESSION['email'])){
 header('location: index 1.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Settings | Lifestyle Store</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--bootstrap stylesheet-->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <!--glyphicon stylesheet-->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/glyphicon.css">
    <!--internal stylesheet-->
	<link rel="stylesheet" type="text/css" href="settings 1.css">
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
				<a href="cart 1.php" class="nav-link"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a>
			</li>
			<li class="nav-item pr-3 pl-3">
				<a href="settings 1.php" class="nav-link"><span class="glyphicon glyphicon-cog"></span> Settings</a>
			</li>
      		<li class="nav-item pr-3 pl-3">
      		  <a href="logout 1.php" class="nav-link"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
      		</li>
		</ul>
		</div>
	</nav>
	<!--navbar end-->

	<!--body-->
	<div class="container-fluid" id="division">
		<div class="row">
			<div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-12">
				<h5>Change Password</h5>
				<form method="post" action="user_settings.php">
					<div class="form-group">
                	  <input class="form-control" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password1" placeholder="Old Password" required>
                	</div>
                	<div class="form-group">
                	  <input class="form-control" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password2" placeholder="New Password" required>
                	</div>
                	<div class="form-group">
                	  <input class="form-control" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password3" placeholder="Re-type New Password" required>
                	</div>
                	<input class="btn btn-primary" value="Change" type="submit" name="button">
                </form>
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