<?php
session_start();
require_once "functions.php";
if(isset($_SESSION["profiles"])){
	$lastName = $_SESSION["profiles"]["LastName"];
	$memberID = $id = $_SESSION["profiles"]["ID"];
	$total = 0;
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
</head>
<body>
	<?php require "navbar.php"; ?>

	<!-- start container -->
	<div class="container">
		<div class="row">
			<div class="col-md-10" style="border:solid; border-width: 1px; margin-bottom:10px; border-color: rgb(160,160,160);">
				<div class="container">
					<?php if(isset($products)): ?>
						<!-- php here -->
						<?php for($i=0;$i<count($products);$i++): ?>
							<?php $total += $products[$i]["ProductPrice"]; ?>
							<div class="row">
								<form class="form-horizontal" role="form">
									<div class="col-md-2 form-group">
										<?php showPicture($products[$i]["ProductCode"]) ?>
									</div>
									<div class="col-md-3 form-group" style="padding:10px;">
										<label class="control-label col-md-6">Name:</label>
										<div class="col-md-6">
											<p class="form-control-static"><?= $products[$i]["ProductName"] ?></p>
										</div>
									</div>
									<div class="col-md-3 form-group" style="padding:10px;">
										<label class="control-label col-md-6">Description:</label>
										<div class="col-md-6">
											<p class="form-control-static"><?= $products[$i]["ProductDes"] ?></p>
										</div>
									</div>
									<div class="col-md-2 form-group" style="padding:10px;">
										<label class="control-label col-md-6">Price:</label>
										<div class="col-md-6">
											<p class="form-control-static"><?= $products[$i]["ProductPrice"] ?></p>
										</div>
									</div>
									<div class="col-md-2 form-group" style="padding:10px;">
										<div class="row">
											<a href="removefromCart.php?pCode=<?= $products[$i]["ProductCode"]?>" class="btn"><span style="color:red; border:solid; border-width:1px; padding:5px;">Delete</span></a>
										</div>
									</div>
								</form>
							</div>
						<?php endfor; ?>
						<!-- end php here -->
					</div>
				</div>
				<div class="col-md-2">
					<div class="container-fruid" style="padding-left:5px;">
						<div class="row">
							<h1 style="color: red;" class="text-center">total <?= $total ?></h1>
						</div>
						<div class="row">
							<button type="button" class="btn btn-default center-block">CHECKOUT</button>
						</div>
					</div>
				</div>
			<?php else: ?>
				No Product in Cart.
			<?php endif; ?>
		</div>
	</div>
	<!-- end container -->


	<script src="jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>