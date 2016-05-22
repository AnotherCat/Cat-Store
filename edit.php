<?php
session_start();
require_once "functions.php";
if(isset($_SESSION["profiles"]) && isset($_SESSION["profiles"]["Admin"])){
	$lastName = $_SESSION["profiles"]["LastName"];
	$id = $_SESSION["profiles"]["ID"];
	$admin = $_SESSION["profiles"]["Admin"];
}else{
	echo "You dont have any permission here. HACKER!!!??";
	destroySession();
	echo "<meta http-equiv=\"refresh\" content=\"1; URL=index.php\">";
	die();
}

$resultProducts = queryMySQL("SELECT * FROM products");

if($resultProducts->num_rows == 0){
		// do nothing
}else{
	$products = array();
	while($row=$resultProducts->fetch_array(MYSQLI_ASSOC)){
		array_push($products,$row);
	}
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
	<?php require "navbar.php"; ?>

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-4">
				<a href="addProduct.php" class="btn btn-primary">Add Product</a>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="container-fruid">
						<!-- php here -->
						<?php for($i=0;$i<count($products);$i++): ?>
							<div class="row">
							<div class="col-md-4">
									<?php showPicture("catfood2") ?>
								</div>
								<div class="col-md-1">
									Name : <?= $products[$i]["ProductName"] ?>
								</div>
								<div class="col-md-2">
									Description : <?= $products[$i]["ProductDes"] ?>
								</div>
								<div class="col-md-1">
									Price <?= $products[$i]["ProductPrice"] ?>
								</div>
								<div class="col-md-4">
									<div class="row">
										<a href="" class="btn btn-primary">Edit</a>
									</div>
									<div class="row">
										<a href="" class="btn btn-primary">Delete</a>
									</div>
								</div>
							</div>
						<?php endfor; ?>
						<!-- php here -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>