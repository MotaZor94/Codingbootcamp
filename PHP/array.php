<?php
$cars_i_want = [];

var_dump ($cars_i_want);

$cars_i_want[] = "Aston Martin";
$cars_i_want[] = "Bugatti";
$cars_i_want[] = "Ferrari";
$cars_i_want[] = "Lamborghini";
$cars_i_want[] = "Maserati";
$cars_i_want[] = "Mercedes";
$cars_i_want[] = "Porsche";
$cars_i_want[] = "Skoda";


echo "for myself i would buy {$cars_i_want[3]}<br>";
echo "for my spouse i would buy {$cars_i_want[7]}<br>";

$cars_i_want[4] = "Smart";

echo "Each of my kids will get a {$cars_i_want[4]}.<br>";

foreach ($cars_i_want as $value) {
    echo "<br><li>ther car i want is {$value}</li>";
   }


$vehicles = [
    'Bicycle' => 50,
    'Car' => 150,
    'Train' => 110
];

?>


