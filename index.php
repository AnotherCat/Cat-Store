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
	<div class="container">
		<div class="row bg-primary">
			<div class="col-md-2 logo">
			<h1> Cat-Store</h1>
			
			</div>		
			<div class="col-md-8 lower bg">
				<form action="#" method="get" accept-charset="utf-8">
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
				</form>
			</div>
			<div class="col-md-1 lower">
				<!-- Sign Up button -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signupForm">Sign Up</button>
			</div>
			<div class="col-md-1 lower">
				<!-- Log In button -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginForn">Log In</button>
			</div>		
		</div>
		<div class="row">
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
			<div class="col-md-10 bg-danger">shop</div>	
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
</div>

<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>