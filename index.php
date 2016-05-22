<?php
session_start();
require_once "functions.php";
if(isset($_SESSION["profiles"])){
	$lastName = $_SESSION["profiles"]["LastName"];
	$id = $_SESSION["profiles"]["ID"];
	$admin = $_SESSION["profiles"]["Admin"];
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
			<div class="col-md-12" style="margin:0px;padding:0px;">
				<img src="pictures/interior_cat_banner.jpg" width="100%" height="100%">			
			</div>
		</div>
		<div class="row">
			<!--shop-->
			<div class="col-md-12">
				<h1 class="text-center">ยินดีต้อนรับสู่ ร้านCat Store</h1>
			</div>	
			<!--menu-->
			<div class="col-md-12 text-center" style="padding:3px;">
				<a href="gallery.php"><img src="pictures/cat-logo-food.png" alt="" width="50" height="50">อาหารแมว</a>
				<a href="gallery.php"><img src="pictures/cat-logo-toy.png" alt="" width="50" height="50">ของเล่น</a>
				<a href="gallery.php"><img src="pictures/cat-logo-pill.png" alt="" width="50" height="50">ยารักษาโรค</a>
				<a href="gallery.php"><img src="pictures/cat-logo-sand.png" alt="" width="50" height="50">ทรายแมว</a>
			</div>
		</div>	
		<!--cat food&toys show-->
		<div class="row slice">
			<div class="row list">
				<div class="col-md-2 bg">
					<p class="text-center tap">CAT FOODS</p>
				</div>	
				<div class="col-md-2 col-md-offset-4 bg">
					<p class="text-center tap">CAT TOYS</p>
				</div>	
			</div>
			<div class="row">
				<div class="col-md-6">
					<div id="myCarousel-food" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel-food" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel-food" data-slide-to="1"></li>
							<li data-target="#myCarousel-food" data-slide-to="2"></li>
							<li data-target="#myCarousel-food" data-slide-to="3"></li>
							<li data-target="#myCarousel-food" data-slide-to="4"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<a href="gallery.php" title="">
									<img src="pictures/catfood.jpg" class="center-block lo-pd">
									<div class="carousel-caption">
										<h3>Me-O Persian Anti hairball</h3>						
									</div>
								</a>
							</div>
							<div class="item">
								<a href="gallery.php" title="">
									<img src="pictures/catfood2.jpg" class="center-block lo-pd">
									<div class="carousel-caption">
										<h3>Me-O Seafood</h3>
									</div>
								</a>
							</div>
							<div class="item">
								<a href="gallery.php" title="">
									<img src="pictures/catfood3.jpg" class="center-block lo-pd">
									<div class="carousel-caption">
										<h3>Royal Canin Kitten Persain32</h3>
									</div>
								</a>
							</div>
							<div class="item">
								<a href="gallery.php" title="">
									<img src="pictures/catfood4.jpg" class="center-block lo-pd">
									<div class="carousel-caption">
										<h3>Royal Canin Babycat</h3>
									</div>
								</a>
							</div>
							<div class="item">
								<a href="gallery.php" title="">
									<img src="pictures/catfood5.jpg" class="center-block lo-pd">
									<div class="carousel-caption">
										<h3>Royal Canin GASTRO INTESTINAL</h3>
									</div>
								</a>
							</div>
						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel-food" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel-food" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<div class="col-md-6">
					<div id="myCarousel-toy" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel-toy" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel-toy" data-slide-to="1"></li>
							<li data-target="#myCarousel-toy" data-slide-to="2"></li>
							<li data-target="#myCarousel-toy" data-slide-to="3"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<a href="gallery.php" title="">
									<img src="pictures/4h.jpg" class="center-block lo-pd">
									<div class="carousel-caption">
										<h3>Cat Toys for Entrancing</h3>
									</div>
								</a>
							</div>
							<div class="item">
								<a href="gallery.php" title="">
									<img src="pictures/2h.jpg" class="center-block lo-pd">
									<div class="carousel-caption">
										<h3>Cat Mouse Toy</h3>
									</div>
								</a>
							</div>
							<div class="item">
								<a href="gallery.php" title="">
									<img src="pictures/3h.jpg" class="center-block lo-pd">
									<div class="carousel-caption">
										<h3>Cat Toys for Artistic</h3>
									</div>
								</a>
							</div>
							<div class="item">
								<a href="gallery.php" title="">
									<img src="pictures/1h.jpg" class="center-block lo-pd">
									<div class="carousel-caption">
										<h3>Cat Condo</h3>
									</div>
								</a>
							</div>
						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel-toy" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel-toy" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>	
		</div>
		<!--end Catfood&toys show-->

		<!--cat pill&sands show-->
		<div class="row slice">
			<div class="row list">
				<div class="col-md-2 bg">
					<p class="text-center tap">HEALTH&CARE</p>
				</div>	
				<div class="col-md-2 col-md-offset-4 bg">
					<p class="text-center tap">CAT LITTER</p>
				</div>	
			</div>
			<div class="row">
				<div class="col-md-6">
					<div id="myCarousel-hc" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel-hc" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel-hc" data-slide-to="1"></li>
							<li data-target="#myCarousel-hc" data-slide-to="2"></li>
							<li data-target="#myCarousel-hc" data-slide-to="3"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<a href="gallery.php" title="">
									<img src="pictures/c1.jpg" class="center-block lo-pd">
									<div class="carousel-caption">
										<h3>FRONTLINE Plus</h3>				
									</div>
								</a>
							</div>
							<div class="item">
								<a href="gallery.php" title="">
									<img src="pictures/c2.jpg" class="center-block lo-pd">
									<div class="carousel-caption">
										<h3>FRONTLINE Spay</h3>		
									</div>
								</a>
							</div>
							<div class="item">
								<a href="gallery.php" title="">
									<img src="pictures/c3.jpg" class="center-block lo-pd">
									<div class="carousel-caption">
										<h3>HOBBYY</h3>		
									</div>
								</a>
							</div>
							<div class="item">
								<a href="gallery.php" title="">
									<img src="pictures/c4.jpg" class="center-block lo-pd">
									<div class="carousel-caption">
										<h3>Pet Grass</h3>	
									</div>
								</a>
							</div>
						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel-hc" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel-hc" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<div class="col-md-6">
					<div id="myCarousel-lit" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel-lit" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel-lit" data-slide-to="1"></li>
							<li data-target="#myCarousel-lit" data-slide-to="2"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<a href="gallery.php" title="">
									<img src="pictures/5952079.jpg" class="center-block lo-pd">
									<div class="carousel-caption">
										<h3>CATLUX</h3>
									</div>
								</a>
							</div>
							<div class="item">
								<a href="gallery.php" title="">
									<img src="pictures/cat_litter.jpg" class="center-block lo-pd">
									<div class="carousel-caption">
										<h3>Cat Litter Home Band</h3>
									</div>
								</a>
							</div>
							<div class="item">
								<a href="gallery.php" title="">
									<img src="pictures/pristinep28catlitterscoop.jpg" class="center-block lo-pd">
									<div class="carousel-caption">
										<h3>Pristine Paws</h3>
									</div>
								</a>
							</div>
						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel-lit" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel-lit" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>	
		</div>
		<!--end CatPill&Sands show-->	


	</div>	
</div>
</div>

<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>