<pre>
<?php
session_start();


class A{
    private $b = "Some value";

    public function getMe(){
        return $this->b;
    }
}

$a = new A();
echo "<h1>Object</h1>";
print_r($a);



 $_SESSION["class_a"] = serialize($a);
// $_SESSION["class_a"] = $a;
 $_SESSION["user_profile"] = "root";
 $_SESSION["home_dir"] = "/root";

echo "<h1>Session</h1>";
var_dump($_SESSION);

 echo "<h1>Session - unset</h1>";
 unset($_SESSION["user_profile"]);
 unset($_SESSION["home_dir"]);
 print_r($_SESSION);
