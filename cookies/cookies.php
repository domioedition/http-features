<?php
/**
 * Cookie Example
 */

//Error
//setcookie("name", "Sam");
//var_dump($_COOKIE);
// echo $_COOKIE['name'];

//setting cookie(while the browser is opened)
// setcookie("name_new", "Sammy");

//setting cookie 1 hour
 setcookie("name_new", "Sammy", time()+3600);

//setting cookie 1 hour with path /data/
//setcookie("name", "Sam", time()+3600, '/data/');
//setcookie("TestCookie", "", time() - 3600, "/~rasmus/", "example.com", 1);

//setting cookie 1 hour with path for all subdomains
//setcookie("name", "Sam", time()+3600, '/data/', '.example.com');

//response cookie only with https
//setcookie("first_name", "Sammy", time()+3600, '/', '.example.com', true);

//setcookie("first_name", "John", time()+100000, '/data1/');
//response cookie only with http
// setcookie("name", "Sam", time()+3600, '/', '.example.com', false, true);

//unset cookie
// setcookie('name', '', time()-3600);


// //store array in cookies
 $user = [
     'name' => 'Sam',
     'theme' => 'original',
 ];

// //serialize()
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
