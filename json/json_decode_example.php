<pre>
<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$json = '{"a":1,"b-a":28877,"cooler":3500,"dummy_value":4,"epic":5}';
print_r(json_decode($json));

$a = json_decode($json);
 var_dump($a->cooler);//$a->cooler = 3500
print_r(json_decode($json, true));
//
//
$obj = json_decode($json);
// print_r($obj->b);
print_r($obj->{'b-a'});
//
////Доступ к элементам объекта, которые содержат символы, недопустимые в соответствии с соглашением об именах PHP
//// (то есть дефис), может быть выполнен путем обрамления имени элемента фигурными скобками и апострофами.
 $json = '{"b-a": 28877}';
//
 $obj = json_decode($json);
 print $obj->{'b-a'}; // 28877
//
//
