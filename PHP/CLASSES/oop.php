<?php

require_once "User.php";

$total_users = 0;


$steve = new User("steve");

$steve->id = 1;
$steve->name = "Stephen";



echo "The name of user 1 {$steve->name}<br>";


$bob = new User("robi");
$bob->name = "Robert";

//calling method
$steve->dumpMe();

$bob->dumpMe();

var_dump($total_users);



unset($steve);
unset($bob);

var_dump($total_users);