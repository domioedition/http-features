<?php

echo "<h1>Headers</h1>";

/**
 * header example
 */

//Redirect status 302
header('Location: http://127.0.0.1/cookies/');

//header('HTTP/1.1 301 Moved Permanently');
//header('Location: http://127.0.0.1/cookies/');
//or
//header('Location: http://127.0.0.1/cookies/', true, 301);

//re-request
header("Refresh: 3");
header("Refresh: 3; url=http://127.0.0.1");

header('Content-type: text/xml; charset=utf-8');

//https://en.wikipedia.org/wiki/Media_type


header('Content-type: application/pdf');
header('Content-type: application/xml');
header('Content-type: text/html; charset=Windows-1251');


//Caching
//Disable browser caching(промежуточное кеширование остается)
header("Cache-Control: no-cache, max-age=0");

////Total disable browser caching
header("Cache-Control: no-store");

////Enable caching Only one hour from the request point
header("Cache-Control: max-age=3600");

////Enable caching 1 hour
header("Expires: " . date("r", time() + 3600));

echo date('H:i:s');