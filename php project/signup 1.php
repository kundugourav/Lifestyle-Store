<?php
require 'common.php';
if (isset($_SESSION['email'])){
 header('location: product 1.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Signup | Lifestyle Store</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">

    <!--bootstrap stylesheet-->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <!--glyphicon stylesheet-->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/glyphicon.css">
    <!--internal stylesheet-->
	<link rel="stylesheet" type="text/css" href="signup 1.css">
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
    <div class="container">
      <div class="row">
        <div class="col-xl-8 offset-lg-1 offset-xl-2">
          <form class="mar" method="post" action="user_registration.php">

            <h1>SIGN UP</h1>
            <div class="form-group">
              <input class="form-control" type="text" name="name" placeholder="Name" required>
            </div>
            <div class="form-group">
              <input class="form-control" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input class="form-control" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="phone" placeholder="Contact" required>
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="city" placeholder="City" required>
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="address" placeholder="Address" required>
            </div>
            <input class="btn btn-primary " value="Submit" type="submit" name="button" required>

          </form>
        </div>
      </div>
    </div>
    <!--end body-->

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