<?php

# Redirect status 302
// header('Location: http://127.0.0.1');
// header('Location: https://yahoo.com');
// exit();

// header('HTTP/1.1 301 Moved Permanently');
// header('Location: http://127.0.0.1/cookies/');
# or
// header('Location: http://127.0.0.1/cookies/', true, 301);
// header('Location: http://localhost:9000/', true, 301);

# re-request
// header("Refresh: 3");
// header("Refresh: 3; url=http://127.0.0.1");


// https://en.wikipedia.org/wiki/Media_type
// header('Content-type: text/plain; charset=utf-8');
// header('Content-type: text/html; charset=Windows-1251');
// header('Content-type: application/xml');
// header('Content-type: audio/ogg; charset=utf-8');
// header('Content-type: application/pdf');

// echo <<<EXAMPLE_XML
// <note>
//     <to>Tove</to>
//     <from>Jani</from>
//     <heading>Reminder</heading>
//     <body>Don't forget me this weekend!</body>
// </note>
// EXAMPLE_XML;

// header('Content-type: text/html; charset=utf-8');
echo '<h1>Headers</h1>';
echo 'Öğretim insan şahsiyetinin tam gelişmesini ve insan haklarıyla ana hürriyetlerine saygının kuvvetlenmesini hedef almalıdır. Öğretim bütün milletler, ırk ve din grupları arasında anlayış, hoşgörü ve dostluğu teşvik etmeli ve Birleşmiş Milletlerin barışın idamesi yolundaki çalışmalarını geliştirmelidir. 1';
echo 'اختبار الشخصية: اعرف شخصيتك هل أنت إنسان عصبي؟';


# Caching
# Disable browser caching(промежуточное кеширование остается)
// header("Cache-Control: no-cache, max-age=0");

# Total disable browser caching
// header("Cache-Control: no-store");

# Enable caching Only one hour from the request point
// header("Cache-Control: max-age=3600");

# Enable caching 1 hour
// header("Expires: " . date("r", time() + 3600));
// echo date('H:i:s');

# store this file for one year, but before use it, check to see if a new version is available.
// header('Cache-Control: no-cache, max-age=31536000');



