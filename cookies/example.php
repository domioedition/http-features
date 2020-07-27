<?php
$visitCounter = 0;
$lastVisit = "";

if (isset($_COOKIE['visitCounter'])) {
    $visitCounter = $_COOKIE['visitCounter'];
}
$visitCounter++;

if (isset($_COOKIE['visitCounter'])) {
    $lastVisit = date('Y-m-d H:i:s', $_COOKIE['lastVisit']);
}

setcookie('visitCounter', $visitCounter, 0x7FFFFFFF); //unsigned 32-bit integer
setcookie('lastVisit', time(), 0x7FFFFFFF);


//как изменить скрипт так, чтобы куки устанавливались только один раз в день??
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Test</title>
</head>
<body>
<h1>Example Cookies</h1>
<div class="container">
    <h1>
        <?php
        if ($visitCounter == 1) {
            echo "Welcome to us!";
        } else {
            echo "You visit us $visitCounter times. ";
            echo "Last visit: $lastVisit";
        }
        ?>
    </h1>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>
</html>