<?php

$uploadfile = basename($_FILES['userfile']['name']);


if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}
print "<pre>";
echo 'Here is some more debugging info:';
print_r($_FILES);

print "</pre>";