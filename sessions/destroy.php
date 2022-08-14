<?php
session_start();
// remove all session variables
session_unset();

// destroy the session
session_destroy();

// https://www.php.net/manual/en/function.session-destroy.php
// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}


print_r($_SESSION);


//header( "refresh:3; url=/sessions/");
//header('Location: /sessions/');