<?session_start();?>
<? define('BASE_PATH', __DIR__); // Simpler and cleaner ?>

<?
if (defined('BASE_PATH')) {
} else {
    echo 'BASE_PATH is not defined.';
}

?>

<?php include 'includes/db.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="icon" type="image/png" href="assets/images/icons/favicon.png"/>
        <link
            rel="stylesheet"
            type="text/css"
            href="vendor/bootstrap/css/bootstrap.min.css">
        <link
            rel="stylesheet"
            type="text/css"
            href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <link
            rel="stylesheet"
            type="text/css"
            href="vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/util.css">
        <link rel="stylesheet" type="text/css" href="assets/css/main.css">
        <title>Logare</title>
    </head>
    <body>

        <?php include 'views/main.php'; ?>
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/select2/select2.min.js"></script>
        <script src="vendor/tilt/tilt.jquery.min.js"></script>
        <script >
            $('.js-tilt').tilt({scale: 1.1})
        </script>
        <script src="assets/js/main.js"></script>

        <script>
            $(document).ready(function () {
                $(".txt2").click(function () {
                    $("#forgotModal").css("display", "block");
                });

                $(".close").click(function () {
                    $("#forgotModal").css("display", "none");
                });

                $(window).click(function (event) {
                    if ($(event.target).is("#forgotModal")) {
                        $("#forgotModal").css("display", "none");
                    }
                });
            });
        </script>

    </body>
</html>