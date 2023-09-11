<?php
// Start the session
session_set_cookie_params(["SameSite" => "lax"]); //none, lax, strict
session_set_cookie_params(["Secure" => "true"]); //false, true
session_set_cookie_params(["HttpOnly" => "true"]); //false, true
session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <?php

// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";


?>

</body>

</html>