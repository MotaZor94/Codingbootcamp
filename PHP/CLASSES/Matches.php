<?php
require_once "Match.php";
require_once "FootballMatch.php";
require_once "IcehockeyMatch.php";

$match1 = new FootballMatch("2019-02-08 17:30:30");
$match2 = new IcehockeyMatch("2019-02-08 17:30:30");

var_dump($match1,$match2);