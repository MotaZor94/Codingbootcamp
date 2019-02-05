<?php

$my_name = "marko";
$height =  1.7;
var_dump($my_name);
var_dump($height);






function headline($text) 
{
    return "<h1>Hello $text</h1>";
}
echo headline("MARKO");




$inches = 12;
function inchesToCentimeters($inches)
{
    return $inches * 2.54;
}
echo inchesToCentimeters(20);



$celsius = 20;
function celsiusToFahrenheit($celsius)
{
    return (9/5) * $celsius + 32;
}
echo "<br>".celsiusToFahrenheit(200);



function isHealthy($temperature,$short)
{
 if($short == "f") {
    $temperature = ($temperature-32)/1.8;
    return "Temperature is {$temperature} celsius";
}
 else {
    return "Temperature is {$temperature} celsius";
} 
};
echo "<br>".isHealthy(20,"f");




function evenOrOdd($number) 
{
    return $number % 2 == 0 ? "Number is Even" : " Number is Odd";
}
echo "<br>".evenOrOdd(20);


$weekday = date("l");


function sayWeekday($weekday) 
{
    return "Today is {$weekday}";
}
echo "<br>".sayWeekday($weekday);


$year_of_birth = 1994;


function sayBirthday($year_of_birth)
{
    $this_year = date('Y');
    $my_age = $this_year - $year_of_birth;
    return "I was born in {$year_of_birth},and that means that i am {$my_age} years old.";
}
echo "<br>".sayBirthday($year_of_birth);




$height = 178;
function assesHeight($height)
{
    if ($height > 180){
        return "Hey tall";
    }elseif ($height < 180 AND $height > 160){
        return "Average";
    } else {
        return "Short";
    }
}
echo "<br>".assesHeight($height);



function getLanguageUsage($lang) 
{
    switch ($lang){
        case "php":
        case "python":
        case "ruby": 
        return "serverside";
        break;
        case "javascript":
        return "clientside";
        break;
        default:
        return "I have no idea";
        break;
    }
}
echo "<br>".getLanguageUsage("php");









