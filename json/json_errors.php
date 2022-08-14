<pre>

<?php
// A valid json string
$json[] = '{"Organization": "PHP Documentation Team"}';

// An invalid json string which will cause an syntax
// error, in this case we used ' instead of " for quotation
$json[] = "{'Organization': 'PHP Documentation Team'}";

print_r($json);

foreach ($json as $string) {
    echo 'Decoding: ' . $string;
    json_decode($string);

    switch (json_last_error()) {
        case JSON_ERROR_NONE:
            echo ' - No errors';
            break;
        case JSON_ERROR_DEPTH:
            echo ' - Maximum stack depth exceeded';
            break;
        case JSON_ERROR_STATE_MISMATCH:
            echo ' - Underflow or the modes mismatch';
            break;
        case JSON_ERROR_CTRL_CHAR:
            echo ' - Unexpected control character found';
            break;
        case JSON_ERROR_SYNTAX:
            echo ' - Syntax error, malformed JSON';
            break;
        case JSON_ERROR_UTF8:
            echo ' - Malformed UTF-8 characters, possibly incorrectly encoded';
            break;
        default:
            echo ' - Unknown error';
            break;
    }

    echo PHP_EOL;
}


// An invalid UTF8 sequence
$text = "\xB1\x31";
// $text = "my new test";

$json  = json_encode($text);
$error = json_last_error();
var_dump($error);
var_dump($error === JSON_ERROR_UTF8);


//0 = JSON_ERROR_NONE
//1 = JSON_ERROR_DEPTH
//2 = JSON_ERROR_STATE_MISMATCH
//3 = JSON_ERROR_CTRL_CHAR
//4 = JSON_ERROR_SYNTAX
//5 = JSON_ERROR_UTF8