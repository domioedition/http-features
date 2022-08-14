<pre>
<a href="http://localhost/http-features/sessions/">Sessions</a>
<?php
session_start();

class Connection {
    private $dsn, $username, $password;

    public function __construct($dsn, $username, $password){
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
    }

    public function __sleep(){
        return array('dsn', 'username', 'password');
    }

    public function getUsername(){
        return $this->username;
    }
}

$connection = new Connection('mysql:host=localhost', 'mike', '123');
echo "<h1>Connection</h1>";
print_r($connection);



$_SESSION["class_connection"] = serialize($connection);
// $_SESSION["class_connection"] = $connection;
$_SESSION["user_profile"] = "root";
$_SESSION["home_dir"] = "/root";

echo "<h1>Session</h1>";
var_dump($_SESSION);

echo "<h1>Session - unset</h1>";
// unset($_SESSION["user_profile"]);
// unset($_SESSION["home_dir"]);
// print_r($_SESSION);
