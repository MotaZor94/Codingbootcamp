<?php

class BlogPost
{
    public $id = null;
    public $headline = null;
    public $text = null;
    public $added_at = null;
    public $user_id = null;
    public $status = "not-published";



    function publish()
    {
        $this->status = "published";
    }

    function __construct($user_id,$headline = null)
   {
    $this->id = $user_id;
    $this->headline = $headline;
    $this->added_at = date('Y-m-d H:i:s');
    global $all_posts;
    $all_posts[] = $this;
    global $total_posts;
    $total_posts++;
    } 

    function __destruct()
    {
        global $total_posts;
        $total_posts--;
    }

}

$all_posts = [];

$total_posts = 0;



$first_post = new Blogpost(1,"Title");
var_dump($first_post);
$second_post = new Blogpost(2,"Title");
$second_post->publish();
var_dump($second_post);

$first_post->id = 1;
$first_post->text = 'I have decided to write my own blog. This is my first post, beautiful in it\'s simplicity.';
$first_post->user_id = 1;
$first_post->status = "published";

$second_post->id = 1;
$second_post->text = 'What is your priority?';
$second_post->user_id = 2;
$second_post->status = "published";
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
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


       <?php foreach($all_posts as $post): ?>
       <?= "<h1 class='headline'>{$post->headline}</h1><br>"?>
       <?= "{$post->id}<br>"?>;
       <?= "{$post->text}<br>"?>;
       <?= "Added at:{$post->added_at}<br>"?>;
       <?php endforeach ?>

        
        <script src="" async defer></script>
    </body>
</html>