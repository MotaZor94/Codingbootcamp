<?php

$page_title = "SHOPPING LIST";
$page = "home";

if (isset($_GET["page" ])) {
    $page =$_GET["page"];
}

$items = [];

if(!empty($_POST["items"])) {
    var_dump($_POST);

    $items = array_filter($_POST["items"]);
}


?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <nav>
            <a href="?page=home">HOME</a>
            <a href="?page=form">FORM</a>
        </nav>
        <h1><?= $page_title ?></h1>

        <?php if ($page == "home") : ?>
            <?php include "home.php"; ?>
        <?php elseif ($page == "form") : ?>
            <?php include "form.php"; ?>
        <?php endif ?>

        
        <script src="" async defer></script>
    </body>
</html>