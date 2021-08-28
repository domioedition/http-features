<pre>
<?php

 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);

$array = ["foo", "baz", "bar"];
//The above example will output:
// echo json_encode($array);

$array = ["one"=>"foo", "two"=> "baz", "three"=>"bar"];
//The above example will output:
// echo json_encode($array);


//All string data must be UTF-8 encoded.

//Bitmask example
$array = ["foo", "baz", "bar>>fff"];
//// 128 | 16 | 1
/// https://habr.com/ru/post/134557/
//$options = JSON_PRETTY_PRINT | JSON_FORCE_OBJECT | JSON_HEX_TAG;
 $options = 1;
// echo json_encode($array, $options);


//Depth example
$array = ["foo" =>[
    "a" => [
        "b" => [
            "c" => "you win"
        ]
    ]
], "baz", "bar"];

// print_r($array);

$options = JSON_PRETTY_PRINT | JSON_FORCE_OBJECT | JSON_HEX_TAG;
// echo json_encode($array, $options, 3);

 $result = json_encode($array, $options, 512);
 var_dump($result);
 echo  "\n". (json_last_error_msg());
 echo  "\n". (json_last_error());
