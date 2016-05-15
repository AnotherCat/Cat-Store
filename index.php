<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
</head>
<body>	
	<div class="container">
		<div class="row">
			<div class="col-md-1 bg-primary">logo</div>
			<div class="col-md-9 bg-danger">
				<div id="custom-search-input">
					<div class="input-group col-md-12">
						<input type="text" class="form-control input-lg" placeholder="Search" />
						<span class="input-group-btn">
							<button class="btn btn-info btn-lg" type="button">
								<i class="glyphicon glyphicon-search"></i>
							</button>
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-1 bg-primary">
				<!-- Sign Up button -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signupForm">Sign Up</button>
			</div>
			<div class="col-md-1 bg-danger">
				<!-- Log In button -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginForn">Log In</button>
			</div>		
		</div>
		<div class="row">
			<div class="col-md-1 bg-danger">menu</div>
			<div class="col-md-11 bg-primary">shop</div>
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
					<form class="form-horizontal">
						<div class="form-group"></div>
						<label class="col-md-4 col-md-offset-1">First Name:</label>
						<div class="col-md-5">
							<input type="text" class="form-control input-sm">
						</div>

						<div class="form-group"></div>
						<label class="col-md-4 col-md-offset-1">Last Name:</label>
						<div class="col-md-5">
							<input type="text" class="form-control input-sm">
						</div>

						<div class="form-group"></div>
						<label class="col-md-4 col-md-offset-1">Email:</label>
						<div class="col-md-5">
							<input type="email" class="form-control input-sm">
						</div>

						<div class="form-group"></div>
						<label class="col-md-4 col-md-offset-1">Password:</label>
						<div class="col-md-5">
							<input type="password" class="form-control input-sm">
						</div>

						<div class="form-group"></div>
						<label class="col-md-4 col-md-offset-1">Confirm Password:</label>
						<div class="col-md-5">
							<input type="password" class="form-control input-sm">
						</div>

						<div class="form-group"></div>
						<div class="col-md-2 col-md-offset-8">
							<input type="submit" class="btn btn-success" value="submit">
						</div>
					</form>
				</div>
				<div class="modal-footer"></div>
			</div>
		</div>
	</div>

	<script src="jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>