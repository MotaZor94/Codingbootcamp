<?php 

class Vehicle
{
    public $wheels_count = null;
    public $color = null;
    public $avg_speed = null;



    function travel($distance)
    {
        $time = $avg_speed / $distance;
        return $time;
    }
}


class Car extends Vehicle
{
    public $wheel_count = 4;
    



    function change_color($color)
    {
        $this->color = $this;
    }
}

class Horse extends Vehicle
{
    public $wheels_count = 0;
    public $is_fed = false;
    


    function feed()
    {
        $is_fed = true;
    }
}

class Address
{
    public $street = null;
    public $house_nr = null;

    function __toString($street,$house_nr)
    {
       $street = 
    }

}
$here = new Adress();

$street = "Krakovská";
$house_nr = 9;
