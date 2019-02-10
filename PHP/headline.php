<?php 


function headline($headline,$size = 1) 
{
    return "<h{$size}>{$headline}</h{$size}>";

}

echo headline("HELLO WORLD",2);