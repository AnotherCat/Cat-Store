<?php
session_start();
require_once "functions.php";
if(isset($_SESSION["profiles"])){
	$lastName = $_SESSION["profiles"]["LastName"];
	$id = $_SESSION["profiles"]["ID"];
}

if(isset($_GET["pcode"])){
	$productCode = sanitizeString($_GET["pcode"]);

	$result = queryMySQL("SELECT * FROM products WHERE ProductCode='$productCode'");

	if($result->num_rows == 0){
		// do nothing
	}else{
		$row=$result->fetch_array(MYSQLI_ASSOC);
		$pID = $row["ID"];
		$pCode = $row["ProductCode"];
		$pName = $row["ProductName"];
		$pDes = $row["ProductDes"];
		$pPrice = $row["ProductPrice"];
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv=Content-Type content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="index.css">
</head>
<body>
	<?php require "navbar.php"; ?>
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
								<input type="text" class="form-control input-sm" name="FirstName">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">Last Name:</label>
							<div class="col-md-5">
								<input type="text" class="form-control input-sm" name="LastName">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">Email:</label>
							<div class="col-md-5">
								<input type="email" class="form-control input-sm" name="Email">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">Password:</label>
							<div class="col-md-5">
								<input type="password" class="form-control input-sm" name="Password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">Confirm Password:</label>
							<div class="col-md-5">
								<input type="password" class="form-control input-sm" id="Confirm">
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

	<!-- start container -->
	<div class="container">
		
		<div class="col-md-4 col-md-offset-4">
			<?php if(isset($pCode)): ?>
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<label class="control-label col-md-6">Product Code:</label>
						<div class="col-md-6">
							<p class="form-control-static"><?= $pCode.$pID ?></p>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-6">Product Name:</label>
						<div class="col-md-6">
							<p class="form-control-static"><?= $pName ?></p>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-6">Product Description:</label>
						<div class="col-md-6">
							<p class="form-control-static"><?= $pDes ?></p>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-6">Product Price:</label>
						<div class="col-md-6">
							<p class="form-control-static"><?= $pPrice ?></p>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-4 col-md-offset-4">
							<a href="#">Add to Cart</a>
						</div>
					</div>
				</form>
			<?php else: ?>
				<span>Product not found XD</span>
			<?php endif; ?>
		</div>
		
	</div>
	<!-- end container -->

	<script src="jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>