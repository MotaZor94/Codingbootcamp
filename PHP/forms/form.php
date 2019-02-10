<?php

require 'lib/DBBlackbox.php';

// handle the incoming request here

// to save any data to the "database":
// insert($any_data)
// $any_data MUST be an array

//insert(['foo' => 'bar']);

function give_me_post_data($index,$default = "")
{
    if (isset($_POST[$index])) {
        $data = $_POST[$index];
    } else {
        $data = $default;
    }
   
    return $data;
}

function print_post_data($index,$default="")
{
    return htmlspecialchars(give_me_post_data($index,$default));
}

$data_to_save = [
    "name" => give_me_post_data("name"),
    "text" => give_me_post_data("text")
];

insert($data_to_save);


var_dump ($_POST);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms exercise</title>
</head>
<body>

    <!-- create your form here -->
    <form action="" method="post">
        <label for="">Name:</label>
        <input type="text" name ="name" value="<?=print_post_data($default="")?>">
       
        <label for="">Why do you want to adopt a dragon?</label>
        <textarea name="text" id="" cols="30" rows="10"><?=print_post_data($default="")?></textarea>
        <br>
        <br>
        <br>
        <input type="submit" value= "clickme!"><br>
        <br>
        <br>
        <br>

        <select name="color">
            <option value="white">White</option>
            <option value="black">black</option>
            <option value="blue">blue</option>
            <option value="green">green</option>
            <option value="red">red</option>
        </select>
    </form>
    
</body>
</html>