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
			<div class="col-md-10">
				<div class="container">
					<?php if(isset($products)): ?>
						<!-- php here -->
						<?php for($i=0;$i<count($products);$i++): ?>
							<?php $total += $products[$i]["ProductPrice"]; ?>
							<div class="row">
								<form class="form-horizontal" role="form">
									<div class="col-md-3 form-group">
										<?php showPicture($products[$i]["ProductCode"]) ?>
									</div>
									<div class="col-md-2 form-group">
										<label class="control-label col-md-6">Name:</label>
										<div class="col-md-6">
											<p class="form-control-static"><?= $products[$i]["ProductName"] ?></p>
										</div>
									</div>
									<div class="col-md-3 form-group">
										<label class="control-label col-md-6">Description:</label>
										<div class="col-md-6">
											<p class="form-control-static"><?= $products[$i]["ProductDes"] ?></p>
										</div>
									</div>
									<div class="col-md-2 form-group">
										<label class="control-label col-md-6">Price:</label>
										<div class="col-md-6">
											<p class="form-control-static"><?= $products[$i]["ProductPrice"] ?></p>
										</div>
									</div>
									<div class="col-md-2 form-group">
										<div class="row">
											<a href="removefromCart.php?pCode=<?= $products[$i]["ProductCode"]?>" class="btn"><span>X</span></a>
										</div>
									</div>
								</form>
							</div>
						<?php endfor; ?>
						<!-- end php here -->
					</div>
				</div>
				<div class="col-md-2">
					<div class="container-fruid">
						<div class="row">
							total <?= $total ?>
						</div>
						<div class="row">
							<button type="button">PROCEED TO CHECKOUT</button>
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