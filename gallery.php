<?php
session_start();
require_once "functions.php";

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
	<?php require "modalForm.php"; ?>

	<div class="container">
		<div class="row">
			<div class="row">
				<div class="col-md-12">
					<div class="container-fruid">
					<?php if(isset($products)): ?>
						<!-- php here -->
						<?php for($i=0;$i<count($products);$i++): ?>
							<div class="row">
								<form class="form-horizontal" role="form">
									<input type="hidden" name="pCode" value="<?= $products[$i]["ProductCode"] ?>">
									<input type="hidden" name="pName" value="<?= $products[$i]["ProductName"] ?>">
									<input type="hidden" name="pDes" value="<?= $products[$i]["ProductDes"] ?>">
									<input type="hidden" name="pPrice" value="<?= $products[$i]["ProductPrice"] ?>">
									<div class="col-md-3 form-group">
										<?php showPicture($products[$i]["ProductCode"]) ?>
									</div>
									<div class="col-md-2 form-group">
										<label class="control-label col-md-4">Name:</label>
										<div class="col-md-8">
											<p class="form-control-static"><?= $products[$i]["ProductName"] ?></p>
										</div>
									</div>
									<div class="col-md-3 form-group">
										<label class="control-label col-md-4">Description:</label>
										<div class="col-md-8">
											<p class="form-control-static"><?= $products[$i]["ProductDes"] ?></p>
										</div>
									</div>
									<div class="col-md-2 form-group">
										<label class="control-label col-md-4">Price:</label>
										<div class="col-md-8">
											<p class="form-control-static"><?= $products[$i]["ProductPrice"] ?></p>
										</div>
									</div>
									<div class="col-md-2 form-group">
										<div class="row">
											<a href="addtoCart.php?pCode=<?= $products[$i]["ProductCode"]?>" class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart</a>
										</div>
									</div>

								</form>
							</div>
						<?php endfor; ?>
						<!-- php here -->
					<?php else: ?>
						No Product Here.
					<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>