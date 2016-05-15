<?php
session_start();
require_once "functions.php";

if (isset($_SESSION["LastName"]))
{
  destroySession();
  echo "<div class='main'>You have been logged out. XD</div>";
  echo "<meta http-equiv=\"refresh\" content=\"2; URL=index.php\">";
}
else echo "<div class='main'><br>" .
  "You cannot log out because you are not logged in. HACKER!!!??";
?>

<br><br></div>
</body>
</html>
