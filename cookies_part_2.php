<pre>
<?php
/**
 * Cookie Example
 */
echo "<h1>COOKIES</h1>";
// setcookie("username", "Mike", time() + 3600);
// setcookie("username", "Mike", time() + 3600, __DIR__, "127.0.0.1", true, true );
print_r($_COOKIE);

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

// unset cookie
// setcookie('username', '', time()-3600);


//How to store array in cookie?
  $user = [
      'name' => 'Sam',
      'theme' => 'original',
  ];
  // setcookie('user_serialized', $user);

// serialize() vs json_encode()

// serialize array to transfer somewhere and maintain integrity use base64_encode

 $str = base64_encode(serialize($user)); //YToyOntzOjQ6Im5hbWUiO3M6MzoiU2FtIjtzOjU6InRoZW1lIjtzOjY6Im9yaWdpbiI7fQ==
//  echo $str;
 setcookie('user_serialized', $str);

 print_r($_COOKIE);
