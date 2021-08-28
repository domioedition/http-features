<pre><?php

include './vendor/autoload.php';

$client = new \GuzzleHttp\Client();
//var_dump($client);
$response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts');

//print_r($response);
//die;
//var_dump($response->getBody());die;
echo $response->getBody();
//$body = $response->getBody();
//
//$stringBody = (string) $body;
//$remainingBytes = $body->getContents();

// var_dump($remainingBytes);