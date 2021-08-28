<pre>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// setcookie("test_cookie", "test", time() + 3000);
setcookie("test_cookie", "test", time() + 3600, 'aa/bb/');
setcookie("test_cookie", "test1", time() + 3600, 'test/', '.local.apache');


print_r($_COOKIE);

die("err");