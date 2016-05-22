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

	<!-- Popup Sign Up Form modal -->
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

	<!-- Popup Login Form modal -->
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

	<!-- Popup Add Product Form modal -->
	<div class="modal fade" id="addProductForm">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label=""><span>&times;</span></button>
					<h4 class="modal-title">Log In</h4>
				</div>
				<div class="modal-body">
					
					<form action="addProduct.php" method="post" enctype="multipart/form-data" class="form-horizontal">

						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">Product Code:</label>
							<div class="col-md-5">
								<input type="text" class="form-control input-sm" name="pCode">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">Product Name:</label>
							<div class="col-md-5">
								<input type="text" class="form-control input-sm" name="pName">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">Description:</label>
							<div class="col-md-5">
								<input type="text" class="form-control input-sm" name="pDes">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">Price:</label>
							<div class="col-md-5">
								<input type="text" class="form-control input-sm" name="pPrice">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">Image:</label>
							<div class="col-md-5">
								<input type="file" name="pImg">
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

</body>
</html>