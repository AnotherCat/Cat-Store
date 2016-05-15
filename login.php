<?php
	session_start();
	require_once "functions.php";
	if(isset($_POST["email"])){
		$email = sanitizeString($_POST["email"]);
    	$pass = sanitizeString($_POST["password"]);

    	$result = queryMySQL("SELECT * FROM members WHERE Email='$email' AND Password='$pass'");

    	if ($result->num_rows == 0)
      {
        echo "<span class='error'>Email/Password invalid</span><br><br>";
        echo "<meta http-equiv=\"refresh\" content=\"2; URL=index.php\">";
      }
      else
      {
		  //successful verification of username and password, store value into session variables
		  //as long as current session remains active, these session variables will be 
		  //acccessible by all programs in the project
      	$row = $result->fetch_array(MYSQLI_ASSOC);
        $_SESSION["LastName"] = $row["LastName"];
        echo "Logging in...";
        echo "<meta http-equiv=\"refresh\" content=\"2; URL=index.php\">";
      }
	}
?>