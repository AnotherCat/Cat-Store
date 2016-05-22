<?php
session_start();
require_once "functions.php";
if(isset($_SESSION["profiles"]) && isset($_GET["pCode"])){

	$memberID = $_SESSION["profiles"]["ID"];
	$productCode = $_GET["pCode"];

	queryMysql("INSERT INTO cart (MemberID,productCode) VALUES('$memberID', '$productCode')");
	echo "<h4>Added to Cart.</h4>";
	echo "<meta http-equiv=\"refresh\" content=\"1; URL=gallery.php\">";
}
?>