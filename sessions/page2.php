<?php
session_start();


class A{
    private $b = 3;
}
$a = new A();
$_SESSION["class_a"] = serialize($a);

$_SESSION["user_profile"] = "root";
$_SESSION["home_dir"] = "/root";


//
print_r($_SESSION);
//unset($_SESSION["home_dir"]);
//print_r($_SESSION);
