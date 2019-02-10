<?php

require 'DBBlackbox.php';

// handle the incoming request here

// to save any data to the "database":
// insert($any_data)
// $any_data MUST be an array
var_dump($_POST);


$data = select();
//$characters = json_decode($data);



if (isset($_POST["img-btn"])) {
    $file = $_FILES["image1"];
    print_r($file);

    $fileName = $_FILES["image1"]["name"];
    $fileTmpName = $_FILES["image1"]["tmp_name"];
    $fileSize = $_FILES["image1"]["size"];
    $fileError = $_FILES["image1"]["error"];
    $fileType = $_FILES["image1"]["type"];

    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array("jpg","jpeg","png","pdf");

    if (in_array($fileActualExt,$allowed)) {
        if($fileError === 0) {
            if($fileSize < 1000000) {
                $fileNameNew = uniqid("",true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
                header("Location: edit.php?uploadsucces");
            } else {
                echo "Your file is too big!";
            }

        } else {
            echo "There was an error uploading your file";

        }

    }else {
        echo "You cannot upload files of this type!";
    }
}


function give_me_post_data($index, $default = '')
{
    if (isset($_POST[$index])) {
        $data = $_POST[$index];
    } else {
        $data = $default;
    }

    return $data;
}

function print_post_data($index, $default = '')
{
    $raw_data = give_me_post_data($index, $default);

    $encoded_data = htmlspecialchars($raw_data);

    return $encoded_data;
}




// prepare the data to be stored into the "DB"
$data_to_save = [
    'name' => give_me_post_data('name'),
    'text' => give_me_post_data('text'),
    'file' => give_me_post_data('image1'),
    "image" => !empty($fileDestination) ? $fileDestination : null
];

// insert the prepared data into the "DB"
insert($data_to_save);

function print_option($value, $label, $name)
{
    ?>
        <option value="<?= $value ?>" <?= give_me_post_data($name) == $value ? 'selected' : '' ?>><?= $label ?></option>
    <?php
}

function select_field($name, array $values, $selected = null, $html_attributes = '')
{
    $html = '';
    $html .= "<select name=\"{$name}\" {$html_attributes}>";
    foreach ($values as $value => $label) {
        $selected_attr = $value == $selected ? 'selected' : '';
        $html .= "<option value=\"{$value}\" {$selected_attr}>{$label}</option>";
    }
    $html .= '</select>';

    return $html;
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
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class ="bg">
            <h3>Welcome to your movie CMS</h3>
            <p>Steps to upload the movie:</p>
            <ol>
                <li>Choose the name of the movie</li>
                <li>Choose it's Rotten Tomatoes rating</li>
                <li>Choose it's IMDB rating</li>
                <li>Upload poster image file</li>
            </ol>

        
        
        </div>

        <?php foreach($data as $dat): ?>
        <?php echo $dat; ?>

        <?php endforeach; ?>

        <form action="" method="post" enctype="multipart/form-data">

        <label class="moviename" for="">Choose the name of the movie:</label>
        <input class="moviename" type="text" name="name" value="<?= print_post_data('name') ?>">
        <br>
        <br>

        <!--<label for="">Why do you want to adopt a dragon?</label><br>-->
        <!--<textarea name="text" id="" cols="30" rows="10"><?= print_post_data('text') ?></textarea>-->
        <?= select_field('color', [
            'white' => 'Whitey',
            'black' => 'Blackie',
            'green' => 'Grinch',
            'blue' => 'Avatar',
            'red' => 'Dragon'
        ], give_me_post_data('color')) ?>
        <br>
        <br>
        <br>

        <?= select_field('gender', [
            'male' => 'Boy',
            'female' => 'Girl'
        ], give_me_post_data('gender')) ?>

        
        <br>
        <br>

        <label for="legs_1">1+</label>
        <input type="radio" name="imdb" value="1" id="legs_1" <?= give_me_post_data('legs') == 1 ? 'checked' : '' ?>>
        <label for="legs_2">2+</label>
        <input type="radio" name="imdb" value="2" id="legs_2" <?= give_me_post_data('legs') == 2 ? 'checked' : '' ?>>
        <label for="legs_3">3+</label>
        <input type="radio" name="imdb" value="3" id="legs_3" <?= give_me_post_data('legs') == 3 ? 'checked' : '' ?>>
        <label for="legs_4">4+</label>
        <input type="radio" name="imbd" value="4" id="legs_4" <?= give_me_post_data('legs') == 4 ? 'checked' : '' ?>>
        <label for="legs_5">5+</label>
        <input type="radio" name="imdb" value="5" id="legs_5" <?= give_me_post_data('legs') == 5 ? 'checked' : '' ?>>
        <label for="legs_5">6+</label>
        <input type="radio" name="imdb" value="5" id="legs_5" <?= give_me_post_data('legs') == 6 ? 'checked' : '' ?>>
        <label for="legs_5">7+</label>
        <input type="radio" name="imdb" value="5" id="legs_5" <?= give_me_post_data('legs') == 7 ? 'checked' : '' ?>>
        <label for="legs_5">8+</label>
        <input type="radio" name="imdb" value="5" id="legs_5" <?= give_me_post_data('legs') == 8 ? 'checked' : '' ?>>
        <label for="legs_5">9+</label>
        <input type="radio" name="imdb" value="5" id="legs_5" <?= give_me_post_data('legs') == 9 ? 'checked' : '' ?>>
        <br>
        <br>
        Select image to upload:
        <input type="file" name="image1">
        <button type="submit" name="img-btn">UPLOAD IMAGE</button>


        <input type="submit" value="Click me!">
    </form>


   








        
        <script src="" async defer></script>
    </body>
</html>