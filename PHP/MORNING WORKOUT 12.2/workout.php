<?php

require_once "MoneyPenny/BondCase.php";

$name = "James";

$name .= "Bond";

$bond_info = [
    'first_name' => 'James',
    'last_name' => 'Bond',
    'gun' => 'Walther PPK',
    'car' => 'Aston Martin',
    'enemy' => 'Stavro Blofeld',
    'relationship_status' => 'widower',
    'cases' => 24
];

echo "The name is {$bond_info['last_name']}.{$bond_info['last_name']}<br>";


echo "One day when I was driving my {$bond_info['car']} in the Apls {$bond_info['enemy']} came along and made me a<br>
{$bond_info['relationship_status']},if i only had my {$bond_info['gun']}";

$bond_info["last_case"] = "Spectre";

use MoneyPenny\BondCase as BondCase;

$case1 = new BondCase(2015);
$case1->setName("Spectre");
$case1->setEnemy("Ernst Stavro Blofeld");

$case1->__addGirl("Estrella");
$case1->__addGirl("Vražičkova");
$case1->__addGirl("Žana");

$case2 = new BondCase(2006);
$case2->setName("Casino Royale");
$case2->setEnemy("Le Chiffre");


$case2->__addGirl("Vesper Lynd");
$case2->__addGirl("Solange Dimitrios");


var_dump($case1);
var_dump($case2);

echo 'On average Bond has met ' .BondCase::getAvgGirlsPerCase().' Girls per case';

