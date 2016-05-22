<?php // functions.php
  $dbhost  = 'localhost';    	// localhost
  $dbname  = 'catstoredb';   	// Modify these...
  $dbuser  = 'root';   			// xampp username = "root"
  $dbpass  = '';   				// xampp password =""
  $appname = "Cat Store"; 	// name of your social networking site

  $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
  $connection->query("set names utf8");

  if ($connection->connect_error) die($connection->connect_error);

  function createTable($name, $query) //check if table exist, if not, create new table
  {
    queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
    echo "Table '$name' created or already exists.<br>";
  }

  function queryMysql($query) //issues a query to MySQL, if fail -> show error message
  {
    global $connection;
    $result = $connection->query($query);
    if (!$result) die($connection->error);
    return $result;
  }

  function destroySession() //Destroy PHP sessions and clears its data to log users out
  {
    $_SESSION=array();

    if (session_id() != "" || isset($_COOKIE[session_name()]))
      setcookie(session_name(), '', time()-2592000, '/');

    session_destroy();
  }

  function sanitizeString($var) //Removes potentially malicious code or tags from user input
  {
    global $connection;
    $var = strip_tags($var);
    $var = htmlentities($var);
    $var = stripslashes($var);
    return $connection->real_escape_string($var);
  }

  function showPicture($path) //Display a image
  {
    $path = "pictures/".$path;
    if (file_exists("$path.jpg"))
      echo "<img src='$path.jpg'>";
  }
?>
