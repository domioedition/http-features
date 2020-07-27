<?php

//print_r($_SESSION);



// Start the session
session_start();

// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.\n";
print_r($_SESSION);
