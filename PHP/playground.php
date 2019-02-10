<?php

function add_item(&$array,$item)
{
    return $array[] = $item;
}

$buba = [];

var_dump(add_item($buba,"HELLO"));



function element($element,$innerhtml = "",$attributes = "")
{
     echo "<{$element} {$attributes}>{$innerhtml}</{$element}>";
}
element("p","hello world","class='how'");


function convert_weight($value,$unit ="kg")
{
  if ($unit == "kg") {
        return $value * 2.20462262;
  } elseif ($unit == "lb") {
        return $value / 2.20462262;
    }
}
echo convert_weight(30);


$movies = [
    'The Shawshank redemption',
    'The Godfather',
    'The Godfather II',
    'Dark Knight', 
    '12 angry men', 
    'Schindler\'s list',
    'Pulp fiction',
    'Lord of the Rings: Return of the King',
    'The good, the bad and the ugly',
    'Fight club'
  ];













