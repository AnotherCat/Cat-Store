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
if(isset($_GET["pCode"])){

	$pCode = $_GET["pCode"];

	$resultProducts = queryMySQL("SELECT * FROM products WHERE ProductCode='$pCode'");

	if($resultProducts->num_rows == 0){
		// do nothing
	}else{
		$row=$resultProducts->fetch_array(MYSQLI_ASSOC);
	}
}

if(isset($_POST["pCode"])){
	$productCode = $_POST["pCode"];
	$productName = $_POST["pName"];
	$productDes = $_POST["pDes"];
	$productPrice = $_POST["pPrice"];

	queryMysql("UPDATE products SET ProductName='$productName',ProductDes='$productDes',ProductPrice='$productPrice' where ProductCode='$productCode'");
	echo "Edited";
	echo "<meta http-equiv=\"refresh\" content=\"1; URL=adminManager.php\">";
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
	<div class="container">
		<form action="edit.php" method="post" class="form-horizontal">

			<input type="hidden" value="<?=$row['ProductCode']?>" name="pCode">

			<div class="form-group">
				<label class="col-md-4 col-md-offset-1">Name:</label>
				<div class="col-md-5">
					<input type="text" class="form-control input-sm" name="pName" value="<?=$row['ProductName']?>">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-4 col-md-offset-1">Description:</label>
				<div class="col-md-5">
					<input type="text" class="form-control input-sm" name="pDes" value="<?=$row['ProductDes']?>">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-4 col-md-offset-1">Price:</label>
				<div class="col-md-5">
					<input type="text" class="form-control input-sm" name="pPrice" value="<?=$row['ProductPrice']?>">
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

	<script src="jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>