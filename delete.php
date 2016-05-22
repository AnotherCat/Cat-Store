<?php 
require_once "functions.php";
if(isset($_GET["pCode"])){

	$pCode = $_GET["pCode"];

	queryMySQL("DELETE FROM products WHERE ProductCode='$pCode'");

	$path = "pictures/".$pCode.".jpg";
	if (file_exists("$path")) {
		unlink($path);
		echo 'File '.$path.' has been deleted';
	} else {
		echo 'Could not delete '.$path.', file does not exist';
	}


	echo "Deleted.";
	echo "<meta http-equiv=\"refresh\" content=\"1; URL=adminManager.php\">";
	die();
}

?>