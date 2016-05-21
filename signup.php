<?php
session_start();
require_once "functions.php";
if (isset($_SESSION["profiles"]))
{
	destroySession();
}
if(isset($_POST["Email"])){
	$FirstName=sanitizeString($_POST["FirstName"]);
	$LastName=sanitizeString($_POST["LastName"]);
	$Email=sanitizeString($_POST["Email"]);
	$Password=sanitizeString($_POST["Password"]);

	if ($FirstName == "" || $LastName == "" || $Email == "" || $Password == ""){
		echo "Some thing wrong!";
		echo "<meta http-equiv=\"refresh\" content=\"1; URL=index.php\">";
	}
	else
	{
		$result = queryMysql("SELECT * FROM members WHERE Email='$Email'");

		if ($result->num_rows){
			echo "That Email already exists<br><br>";
			echo "<meta http-equiv=\"refresh\" content=\"1; URL=index.php\">";
		}
		else
		{
			queryMysql("INSERT INTO members (FirstName,LastName,Email,Password) VALUES('$FirstName', '$LastName', '$Email', '$Password')");

			$result = queryMySQL("SELECT * FROM members WHERE Email='$Email' AND Password='$Password'");

			$row = $result->fetch_array(MYSQLI_ASSOC);
			$_SESSION["profiles"] = $row;

			echo "<h4>Account created</h4>Please Log in.<br><br>";

			echo "<meta http-equiv=\"refresh\" content=\"1; URL=index.php\">";
		}
	}
}
?>