<pre>
<?php

print_r($GLOBALS);


//superglobals_example.php?name=Mike&age=25
echo "<h1>SERVER</h1>";
print_r($_SERVER);


// echo "<h1>REQUEST</h1>";
// print_r($_REQUEST);

// echo "<h1>GET</h1>";
// print_r($_GET);

// echo "<h1>POST</h1>";
// print_r($_POST);

// setcookie("name_cookie", "some value", time() + 3600);
// var_dump($_COOKIE);


/*
    export KEY=value
    export MY_ACCOUNT_SID=youraccountsid
    echo $MY_ACCOUNT_SID

    adding new variable to env
    VAR="aaa"
    printenv VAR
*/
//print_r($_ENV);
//Explanation variables_order https://www.php.net/manual/en/ini.core.php#ini.variables-order
// variables_order="GPCSE"

//https://www.tutorialspoint.com/php-env
putenv("PHP_TEMPUSER=GUEST"); //set new env variable
print_r(getenv());