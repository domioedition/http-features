<pre>
<?php
/*
https://docs.guzzlephp.org/en/stable/index.html
*/

include './vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts/1');

print_r($response->getHeaders());

// var_dump($response->getBody());
// var_dump($response->getBody()->getContents());

$jsonResult = json_decode($response->getBody()->getContents());
// var_dump($jsonResult);
// var_dump($jsonResult[0]->body);
