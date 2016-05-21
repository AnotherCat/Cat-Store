<?php
session_start();

if(isset($_SESSION["profiles"]) && isset($_GET["id"])){
	$lastName = $_SESSION["profiles"]["LastName"];
	$id = $_GET["id"];
}else{
	echo "You dont have any permission here. HACKER!!!??";
	destroySession();
	echo "<meta http-equiv=\"refresh\" content=\"1; URL=index.php\">";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="index.css">
</head>
<body>
	<!-- start nav bar -->
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Cat Store</a>
			</div>
			<ul class="nav navbar-nav">
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?php if(isset($lastName)): ?>
						<a href="#"><span class="glyphicon glyphicon-user"></span> <?= $lastName?></a>
					<?php else: ?>
						<!-- Sign Up button -->
						<a href="#" data-toggle="modal" data-target="#signupForm"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
					<?php endif; ?>
				</li>
				<li>
					<?php if(isset($lastName)): ?>
						<a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
					<?php else: ?>
						<!-- Log In button -->
						<a href="#" data-toggle="modal" data-target="#loginForm"><span class="glyphicon glyphicon-log-in"></span> Login</a>
					<?php endif; ?>
				</li>
				
			</ul>
			<div class="input-group">
				<input type="text" class="form-control input-lg" placeholder="Search" />
				<span class="input-group-btn">
					<button class="btn btn-info btn-lg" type="button">
						<i class="glyphicon glyphicon-search"></i>
					</button>
				</span>
			</div>
		</div>
	</nav>
	<!-- end nav bar -->

	<!-- start container -->
	<div class="container">
		
			<div class="col-md-4 col-md-offset-4">
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<label class="control-label col-md-4">First Name:</label>
						<div class="col-md-8">
							<p class="form-control-static"><?= $_SESSION["profiles"]["FirstName"] ?></p>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4">Last Name:</label>
						<div class="col-md-8">
							<p class="form-control-static"><?= $_SESSION["profiles"]["LastName"] ?></p>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4">Email:</label>
						<div class="col-md-8">
							<p class="form-control-static"><?= $_SESSION["profiles"]["Email"] ?></p>
						</div>
					</div>
				</form>
			</div>
		
	</div>
	<!-- end container -->


	<script src="jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>