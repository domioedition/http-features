<pre>
<a href="http://localhost/http-features/sessions/">Sessions</a>
<?php
session_start();
$_SESSION['userName'] = 'john wick';
$_SESSION['emailAddress'] = 'johnw@nospam.com';
$session_data = session_encode(); // Get the session data
var_dump($session_data);
$filehandle = fopen('php_session.txt', 'w+');// open a file write session data
fwrite($filehandle, $session_data);// write the session data to file
fclose($filehandle);

echo "<h1>Session</h1>";
print_r($session_data);