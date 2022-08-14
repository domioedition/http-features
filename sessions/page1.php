<pre>
<a href="http://localhost/http-features/sessions/">Sessions</a>
<?php
session_start();
echo "<h1>SESSION</h1>";
print_r($_SESSION); // NULL

echo "<h2>Set variables</h2>";
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.\n";
print_r($_SESSION);
