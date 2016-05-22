<?php
session_start();
require_once "functions.php";
if(isset($_SESSION["profiles"])){
	$lastName = $_SESSION["profiles"]["LastName"];
	$id = $_SESSION["profiles"]["ID"];
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
					<li><a href="#">อาหารแมว</a></li>
					<li><a href="#">ของเล่น</a></li>
					<li><a href="#">ยารักษาโรค</a></li>
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
					<a class="left" href="#myCarousel" role="button" data-slide="prev">
						
					</a>
					<a class="right" href="#myCarousel" role="button" data-slide="next">
						
					</a>
				</div>



			</div>	
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
					<form action="signup.php" method="post" class="form-horizontal">
						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">First Name:</label>
							<div class="col-md-5">
								<input type="text" class="form-control input-sm" name="FirstName">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">Last Name:</label>
							<div class="col-md-5">
								<input type="text" class="form-control input-sm" name="LastName">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">Email:</label>
							<div class="col-md-5">
								<input type="email" class="form-control input-sm" name="Email">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">Password:</label>
							<div class="col-md-5">
								<input type="password" class="form-control input-sm" name="Password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">Confirm Password:</label>
							<div class="col-md-5">
								<input type="password" class="form-control input-sm" id="Confirm">
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

	<!-- Popup Login Form -->

	<div class="modal fade" id="loginForm">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label=""><span>&times;</span></button>
					<h4 class="modal-title">Log In</h4>
				</div>
				<div class="modal-body">
					<form action="login.php" method="post" class="form-horizontal">

						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">Email:</label>
							<div class="col-md-5">
								<input type="email" class="form-control input-sm" name="email">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 col-md-offset-1">Password:</label>
							<div class="col-md-5">
								<input type="password" class="form-control input-sm" name="password">
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
	<script src="jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>