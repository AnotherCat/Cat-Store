<?php 
require_once "functions.php";
if(isset($_GET["pCode"])){

	$pCode = $_GET["pCode"];

	queryMySQL("DELETE FROM products WHERE ProductCode='$pCode'");

	echo "Deleted.";
	echo "<meta http-equiv=\"refresh\" content=\"1; URL=adminManager.php\">";
	die();
}

?>