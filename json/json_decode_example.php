<pre>
<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$json = '{"a":1,"b-a":28877,"cooler":3500,"dummy_value":4,"epic":5}';
// print_r(json_decode($json));
// print_r(json_decode($json, true));

$a = json_decode($json);
// var_dump($a->cooler); //$a->cooler = 3500
// print_r(json_decode($json, true));

$obj = json_decode($json);
// print_r($obj->b);
// print_r($obj->{'b-a'});

//Accessing object elements that contain characters that are not allowed according to PHP's naming convention
//(that is, a hyphen) can be done by surrounding the element name with curly braces and apostrophes.
$json = '{"b-a": 28877}';
$obj = json_decode($json);
print $obj->{'b-a'}; // 28877
