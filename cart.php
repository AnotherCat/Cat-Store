<?php
session_start();
require_once "functions.php";
if(isset($_SESSION["profiles"])){
	$lastName = $_SESSION["profiles"]["LastName"];
	$memberID = $id = $_SESSION["profiles"]["ID"];

	$resultProducts = queryMySQL("SELECT * FROM products INNER JOIN cart ON cart.ProductCode = products.ProductCode WHERE cart.MemberID = '$memberID'");

	if($resultProducts->num_rows == 0){
		// do nothing
	}else{
		$products = array();
		while($row=$resultProducts->fetch_array(MYSQLI_ASSOC)){
			array_push($products,$row);
		}
	}
}else{
	echo "You dont have any permission here. HACKER!!!??";
	destroySession();
	echo "<meta http-equiv=\"refresh\" content=\"1; URL=index.php\">";
	die();
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

	<!-- start container -->
	<div class="container">
		<div class="row">
			<div class="col-md-8 bg-danger">
				<div class="container-fruid">
					<!-- php here -->
					<?php for($i=0;$i<count($products);$i++): ?>
						<div class="row">
							<div class="col-md-3">
								<?php showPicture("catfood2") ?>
							</div>
							<div class="col-md-3">
								Name : <?= $products[$i]["ProductName"] ?>
							</div>
							<div class="col-md-3">
								Description : <?= $products[$i]["ProductDes"] ?>
							</div>
							<div class="col-md-2">
								Price <?= $products[$i]["ProductPrice"] ?>
							</div>
						</div>
					<?php endfor; ?>
					<!-- end php here -->
				</div>
			</div>
			<div class="col-md-4 bg-primary">
				<div class="container-fruid">
					<div class="row">
						subtotal
					</div>
					<div class="row">
						total
					</div>
					<div class="row">
						<button class="btn" type="button">PROCEED TO CHECKOUT</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end container -->


	<script src="jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>