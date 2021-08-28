<pre>
<?php
session_start();
var_dump($_SESSION); // NULL

// Start the session


// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.\n";
print_r($_SESSION);
