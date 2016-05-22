<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
</head>
<body>
<?php require "modalForm.php"; ?>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Cat Store</a>
			</div>
			<ul class="nav navbar-nav">
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?php if(isset($admin)): ?>
						<a href="adminManager.php"><span class="glyphicon glyphicon-pencil"></span></a>
					<?php else: ?>
						<a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span></a>
					<?php endif; ?>
				</li>
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
			<div class="input-group col-md-6">
				<input type="text" class="form-control input-lg" placeholder="Search" />
				<span class="input-group-btn">
					<button class="btn btn-info btn-lg" type="button">
						<i class="glyphicon glyphicon-search"></i>
					</button>
				</span>
			</div>
		</div>
	</nav>

</body>
</html>