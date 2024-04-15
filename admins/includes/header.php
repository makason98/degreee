<?php
// Check if the user is logged in and is an admin
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] != 'admin') {
    // Redirect them to the login page if not
    header('Location: ../../index.php');
    exit;
}

// Now, the user is confirmed to be an admin, proceed with admin operations
$userID = $_SESSION['user_id'];
$userName = $_SESSION['user_name'];
$userRole = $_SESSION['user_role'];
print_r($_SESSION);

// Admin-specific content goes here
?>
<?php include '../../includes/db.php';  ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/sidebar.css">
        <link rel="icon" type="image/png" href="../assets/images/icons/favicon.png"/>
        <link rel="stylesheet" type="text/css" href="../../vendor/animate/animate.css">
        <link
            rel="stylesheet"
            type="text/css"
            href="../../vendor/css-hamburgers/hamburgers.min.css">
        <link
            rel="stylesheet"
            type="text/css"
            href="../../vendor/select2/select2.min.css">

        <link
            rel="stylesheet"
            type="text/css"
            href="../../vendor/bootstrap/css/bootstrap.min.css">

        <title>Acasa</title>
    </head>
    <body>
        <header class="site-header">
            <div class="site-identity">
                <a href="home.php"><img src="../assets/images/logo.png" alt="Site Name"/></a>
            </div>
            <nav class="site-navigation">
                <div
                    class="language-picker js-language-picker"
                    data-trigger-class="li4-btn li4-btn--subtle js-tab-focus">
                    <form action="" method="get" id="form_lang" class="language-picker__form">
                        <label for="language-picker-select">Select your language</label>
                        <select name="language-picker-select" id="language-picker-select">
                            <option value="romana">Romana</option>
                            <option value="english">English</option>
                        </select>
                    </form>
                </div>
            </nav>
        </header>