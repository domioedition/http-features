<?php
/**
 * Cookie Example
 */

//Error
echo "hello world!";
setcookie("name", "Sam");
echo $_COOKIE['name'];

//setting cookie(while the browser is opened)
setcookie("name", "Sam");

//setting cookie 1 hour
setcookie("name", "Sam", time()+3600);

//setting cookie 1 hour with path /data/
setcookie("name", "Sam", time()+3600, '/data/');

//setting cookie 1 hour with path for all subdomains
setcookie("name", "Sam", time()+3600, '/', '.example.com');

//response cookie only with https
setcookie("name", "Sam", time()+3600, '/', '.example.com', true);

//response cookie only with http
setcookie("name", "Sam", time()+3600, '/', '.example.com', false, true);

//unset cookie
setcookie('name', '', time()-3600);


//store array in cookies
$user = [
    'name' => 'Sam',
    'theme' => 'original',
];

//serialize()
setcookie('user', json_encode($user));
print_r($_COOKIE);


//serialize() vs json_encode()

//масив упаковать в строку для передачи куда-нибудь
//для сохранения целостности
//$str = base64_encode(serialize($user)); //YToyOntzOjQ6Im5hbWUiO3M6MzoiU2FtIjtzOjU6InRoZW1lIjtzOjY6Im9yaWdpbiI7fQ==
//echo $str;
//
//$u = unserialize(base64_decode($str));
//print_r($u);
