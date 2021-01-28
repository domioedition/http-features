<?php
//setcookie("test_cookie", "test", time() + 3000);
//setcookie("test_cookie", "test", time() + 3600, 'aa/bb/');
setcookie("test_cookie", "test1", time() + 3600, 'test/', '.local.apache');


print_r($_COOKIE);

die("err");