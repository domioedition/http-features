<?php
////session.auto_start = 0;
//ini_set('session.name', 'PHP_TEST');
//ini_set('session.save_path', '');
//ini_set('session.gc_maxlifetime', '1440');
//ini_set('session.cookie_lifetime', '0');
//ini_set('session.cookie_httponly', '');
//ini_set('session.cookie_path', '/');
//
session_start();

if (isset($_SESSION['counter'])) {
    $_SESSION['counter'] += 1;
} else {
    $_SESSION['counter'] = 1;
}

$msg = "You have visited this page " . $_SESSION['counter'];
$msg .= " in this session.";
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

    <title>Setting up a PHP session</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2><?php echo($msg); ?></h2>
            <br><a href="page1.php">Page 1</a>
            <br><a href="page2.php">Page 2</a>
            <br><a href="page3.php">Page 3</a>
            <br><a href="destroy.php">Destroy</a>
            <h3>Session data</h3>
            <pre>
            <?php
            print_r($_SESSION);
            //        var_dump(SID);
            ?>
            </pre>

        </div>
    </div>
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