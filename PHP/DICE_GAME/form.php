<?php require_once "Dice.php";

$nr_of_dice = 1;

if (isset($_GET['nr_of_dice'])) {
    $nr_of_dice = $_GET['nr_of_dice'];
}

$nr_of_sides = 6;

if (isset($_GET['nr_of_sides'])) {
    $nr_of_dice = $_GET['nr_of_dice'];
}

$dice = [];

for ($i = 0; $i < $nr_of_dice; $i++) {
    $die = new Dice($nr_of_sides);
    $die->roll();
    $dice[] = $die;
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


        <form action="" method="get">
        <input type="text" name ="nr_of_dice" value = <?=htmlspecialchars($nr_of_dice)?>>
        <br>
        <br>
        <br>
        <br>
        <h2>How many dices do you want to roll?</h2>
        <select name="nr_of_sides">
            <option value="4"<?= $nr_of_sides == 4 ? ' selected' : '' ?>>4</option>
            <option value="6"<?= $nr_of_sides == 6 ? ' selected' : '' ?>>6</option>
            <option value="8"<?= $nr_of_sides == 8 ? ' selected' : '' ?>>8</option>
            <option value="10"<?= $nr_of_sides == 10 ? ' selected' : '' ?>>10</option>
            <option value="20"<?= $nr_of_sides == 20 ? ' selected' : '' ?>>20</option>
        </select>

        <input type="submit" value="roll the dice!">
        </form>

        <?php foreach ($dice as $die) : ?>

            <?php echo $die; ?>

        <?php endforeach; ?>
        
        <script src="" async defer></script>
    </body>
</html>