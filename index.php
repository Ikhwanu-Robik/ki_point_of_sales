<?php
    include("system/app.php");
    require_once "system/db.php";
    $view = middleware();
    //middleware() is from app.php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir Alfamart</title>
    <link rel="icon" type="image/x-icon" href="/assets/images/logo_alfa.png">
    <link rel="stylesheet" href="/assets/css/navbar.css">
    <link rel="stylesheet" href="/assets/css/login.css">
    <link rel="stylesheet" href="/assets/css/dashboard.css">
</head>

<body style="margin: 0; padding: 0;">
    <?php
        if($view == "login") {
             include("pages/login.php");
        } else {
    ?>

    <?php include("templates/navbar.php"); ?>

    <main>
        <?php render($view, $db_PDO); //render() is from app.php?>
    </main>

    <?php
        }
    ?>
</body>

</html>