<?php
session_start();

if(isset($_SESSION["profiles"])){
	$lastName = $_SESSION["profiles"]["LastName"];
	$id = $_SESSION["profiles"]["ID"];
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
						<a href="profile.php?id=<?= $id ?>"><span class="glyphicon glyphicon-user"></span> <?= $lastName?></a>
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
	<div class="container">
		<div class="row bg-primary">	
			<div class="col-md-12 lower bg"></div>		
		</div>
		<div class="row">

			<!--menu-->
			<div class="col-md-2 bg-danger">
				<div>
					<h1 class="text-center">menu</h1>
				</div>
				<div><a href="" title=""><button type="button" class="btn btn-primary btn-lg btn-block">แมว</button></a></div>
				<div><a href="" title=""><button type="button" class="btn btn-primary btn-lg btn-block">อาหารแมว</button></a></div>
				<div><a href="" title=""><button type="button" class="btn btn-primary btn-lg btn-block">ของเล่นแมว</button></a></div>
				<div><a href="" title=""><button type="button" class="btn btn-primary btn-lg btn-block">ยารักษาโรค</button></a></div>
				<div><a href="" title=""><button type="button" class="btn btn-primary btn-lg btn-block">อาหารแมว</button></a></div>
				<div><a href="" title=""><button type="button" class="btn btn-primary btn-lg btn-block">อาหารแมว</button></a></div>
			</div>

			<!--shop-->
			<div class="col-md-10 bg-danger">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="picture/catfood1.jpg" class="center-block">
						</div>

						<div class="item">
							<img src="picture/catfood2.gif" class="center-block">
						</div>

						<div class="item">
							<img src="picture/catbed.jpg" class="center-block">
						</div>

						
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>



			</div>	
		</div>	
	</div>
	<!-- Popup Sign Up Form -->
	<div class="modal fade" id="signupForm">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label=""><span>&times;</span></button>
					<h4 class="modal-title">Sign Up</h4>
				</div>
				<div class="modal-body">
					<form action="signup.php" method="post" class="form-horizontal">
						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">First Name:</label>
							<div class="col-md-5">
								<input type="text" class="form-control input-sm">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">Last Name:</label>
							<div class="col-md-5">
								<input type="text" class="form-control input-sm">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">Email:</label>
							<div class="col-md-5">
								<input type="email" class="form-control input-sm">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">Password:</label>
							<div class="col-md-5">
								<input type="password" class="form-control input-sm">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">Confirm Password:</label>
							<div class="col-md-5">
								<input type="password" class="form-control input-sm">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-2 col-md-offset-8">
								<input type="submit" class="btn btn-success" value="submit">
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer"></div>
			</div>
			<div class="modal-footer"></div>
		</div>
	</div>

	<!-- Popup Login Form -->

	<div class="modal fade" id="loginForm">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label=""><span>&times;</span></button>
					<h4 class="modal-title">Log In</h4>
				</div>
				<div class="modal-body">
					<form action="login.php" method="post" class="form-horizontal">

						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">Email:</label>
							<div class="col-md-5">
								<input type="email" class="form-control input-sm" name="email">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">Password:</label>
							<div class="col-md-5">
								<input type="password" class="form-control input-sm" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-2 col-md-offset-8">
								<input type="submit" class="btn btn-success" value="submit">
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer"></div>
			</div>
			<div class="modal-footer"></div>
		</div>
	</div>

	<script src="jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>