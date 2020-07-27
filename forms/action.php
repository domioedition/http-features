<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "post method";
    print_r($_POST);
} else {
    echo "GET method";
}

$record  = date('Y-m-d H:i:s') . " - " .  $_REQUEST['email'] . "\n";
file_put_contents('test.log', $record, FILE_APPEND);
header('Location: http://127.0.0.1/forms/');
exit();


//How we can use PUT/PATCH/DELETE?
//https://symfony.com/doc/4.1/form/action_method.html
//<input type="hidden" name="_method" value="put">
// @csrf
