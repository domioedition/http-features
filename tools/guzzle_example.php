<pre><?php

include '../vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts');

//print_r($response);
//die;

// echo $response->getBody();
$body = $response->getBody();

$stringBody = (string) $body;
$remainingBytes = $body->getContents();

var_dump($remainingBytes);