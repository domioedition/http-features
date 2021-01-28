<pre>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "\nPOST method\n\n";
    print_r($_POST);
} else {
    echo "\nGET method\n";
    print_r($_GET);
}
echo "\nREQUEST\n";
print_r($_REQUEST);
//print_r($_COOKIE);


$record  = date('Y-m-d H:i:s') . " - " .  implode(' - ',  $_REQUEST) . "\n";
file_put_contents('test.log', $record, FILE_APPEND);

// 1 - option redirect
// header('Location: http://127.0.0.1/forms/');

// 2 - option redirect
 header( "Refresh:3; url=http://127.0.0.1/forms/", true, 303);
 exit();


//How we can use PUT/PATCH/DELETE?
//https://symfony.com/doc/4.1/form/action_method.html
//<input type="hidden" name="_method" value="put">
// @csrf
