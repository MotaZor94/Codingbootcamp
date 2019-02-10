<?php

$cars_i_want = [];

var_dump($cars_i_want);

$cars_i_want[] = "Aston Martin";
$cars_i_want[] = "Bugatti";
$cars_i_want[] = "Ferrari";
$cars_i_want[] = "Lamborghini";
$cars_i_want[] = "Maserati";
$cars_i_want[] = "Mercedes";
$cars_i_want[] = "Porsche";
$cars_i_want[] = "Yugo";

var_dump($cars_i_want);

if($_mother_in_law == "MAJA"){
    echo "For my mother in law I would buy YUGO.<br>";

}else {
    echo "For my mother in law I would buy FERRARI.<br>";

}
echo "For myself I would buy {$cars_i_want[1]}.<br>";
echo "For my mother in law I would buy {$cars_i_want[7]}.<br>";

$cars_i_want[4] = "Smart";

echo "Each of my kids will get a {$cars_i_want[4]}";


