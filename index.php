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
			<div class="col-md-12">
				<img src="pictures/interior_cat_banner.jpg" width="100%" height="100%">			
			</div>
		</div>
		<div class="row">
			<!--menu-->
			<div class="col-md-2 menu">
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="#">Cat Store</a></li>
					<li><a href="#"><img src="pictures/cat-logo-food.png" alt="" width="50" height="50">อาหารแมว</a></li>
					<li><a href="#"><img src="pictures/cat-logo-toy.png" alt="" width="50" height="50">ของเล่น</a></li>
					<li><a href="#"><img src="pictures/cat-logo-pill.png" alt="" width="50" height="50">ยารักษาโรค</a></li>
				</ul>
			</div>

			<!--shop-->
			<div class="col-md-10 highLight">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
						<li data-target="#myCarousel" data-slide-to="4"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="pictures/catfood.jpg" class="center-block lo-pd">
							<div class="carousel-caption">
								<h3>Me-O Persian Anti hairball formula</h3>
								<p>อาหารแมวชนิดเม็ด สำหรับแมวเปอร์เซีย สูตรป้องกันก้อนขนอุดตัน</p>
							</div>
						</div>
						<div class="item">
							<img src="pictures/catfood2.jpg" class="center-block lo-pd">
							<div class="carousel-caption">
								<h3>Me-O Seafood</h3>
								<p>อาหารแมวชนิดเม็ด สำหรับแมวทุกสายพันธุ์ อายุตั้งแต่ 1 ปีขึ้นไป สูตรซีฟู้ด</p>
							</div>
						</div>
						<div class="item">
							<img src="pictures/catfood3.jpg" class="center-block lo-pd">
							<div class="carousel-caption">
								<h3>Royal Canin Kitten Persain32</h3>
								<p>อาหารแมวชนิดเม็ด สูตรเฉพาะสำหรับลูกแมวเปอร์เซีย</p>
							</div>
						</div>
						<div class="item">
							<img src="pictures/catfood4.jpg" class="center-block lo-pd">
							<div class="carousel-caption">
								<h3>Royal Canin Babycat</h3>
								<p>อาหารแมวชนิดเม็ด สำหรับแม่แมวเปอร์เซีย</p>
							</div>
						</div>
						<div class="item">
							<img src="pictures/catfood5.jpg" class="center-block lo-pd">
							<div class="carousel-caption">
								<h3>Royal Canin GASTRO INTESTINAL</h3>
								<p>อาหารประกอบการรักษาโรคระบบทางเดินอาหาร สำหรับแมวที่มีปัญหาท้องเสีย</p>
							</div>
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>	
		</div>	
		<div class="row">
			<!--shop-->
			<div class="col-md-10 col-md-offset-2 highLight">
				<div id="myCarousel1" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel1" data-slide-to="1"></li>
						<li data-target="#myCarousel1" data-slide-to="2"></li>
						<li data-target="#myCarousel1" data-slide-to="3"></li>
						<li data-target="#myCarousel1" data-slide-to="4"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="pictures/catfood.jpg" class="center-block lo-pd">
							<div class="carousel-caption">
								<h3>Me-O Persian Anti hairball formula</h3>
								<p>อาหารแมวชนิดเม็ด สำหรับแมวเปอร์เซีย สูตรป้องกันก้อนขนอุดตัน</p>
							</div>
						</div>
						<div class="item">
							<img src="pictures/catfood2.jpg" class="center-block lo-pd">
							<div class="carousel-caption">
								<h3>Me-O Seafood</h3>
								<p>อาหารแมวชนิดเม็ด สำหรับแมวทุกสายพันธุ์ อายุตั้งแต่ 1 ปีขึ้นไป สูตรซีฟู้ด</p>
							</div>
						</div>
						<div class="item">
							<img src="pictures/catfood3.jpg" class="center-block lo-pd">
							<div class="carousel-caption">
								<h3>Royal Canin Kitten Persain32</h3>
								<p>อาหารแมวชนิดเม็ด สูตรเฉพาะสำหรับลูกแมวเปอร์เซีย</p>
							</div>
						</div>
						<div class="item">
							<img src="pictures/catfood4.jpg" class="center-block lo-pd">
							<div class="carousel-caption">
								<h3>Royal Canin Babycat</h3>
								<p>อาหารแมวชนิดเม็ด สำหรับแม่แมวเปอร์เซีย</p>
							</div>
						</div>
						<div class="item">
							<img src="pictures/catfood5.jpg" class="center-block lo-pd">
							<div class="carousel-caption">
								<h3>Royal Canin GASTRO INTESTINAL</h3>
								<p>อาหารประกอบการรักษาโรคระบบทางเดินอาหาร สำหรับแมวที่มีปัญหาท้องเสีย</p>
							</div>
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>	

			
		</div>


	</div>
	
	<script src="jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>