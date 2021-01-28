<?php
setcookie("nane1", "some value", time() + 3600);

var_dump($_COOKIE);
var_dump($_REQUEST);

//http://127.0.0.1/superglobals_example.php?name=Mike
//print_r($_GET);

//print_r($_REQUEST);


// print_r($_SERVER);
#/c/xampp/php
//print_r( $_ENV);


//Explanation variables_order https://www.php.net/manual/en/ini.core.php#ini.variables-order
// variables_order="GPCSE"
//var_dump(getenv());

// print_r($_REQUEST);