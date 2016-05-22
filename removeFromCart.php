<?php 
require_once "functions.php";
if(isset($_GET["pCode"])){

	$pCode = $_GET["pCode"];

	queryMySQL("DELETE FROM cart WHERE ProductCode='$pCode'");



	echo "Deleted.";
	echo "<meta http-equiv=\"refresh\" content=\"0; URL=cart.php\">";
	die();
}

?>