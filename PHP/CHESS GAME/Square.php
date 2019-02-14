<?php

include_once "Board.php";

class Square 
{
    protected $x_coord = null;
    protected $y_coord = null;
    protected $piece = null;



    public function __construct($x,$y,$piece = null)
    {
        $this->x_coord = $x;
        $this->y_coord = $y;

    }

    protected function __isDark()
    {
        if($this->x_coord %2 == 0 && $this->y_coord %2 == 0)  {
            return true;
        }
    }

    public function __toString()
   {
    $class = $this->isDark() ? 'dark' : 'light';
    return '<div class="square" '.$class.'>' . $this->piece . '</div>'; // enhance this
    }

}


