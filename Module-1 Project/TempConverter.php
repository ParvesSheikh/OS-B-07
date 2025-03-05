<?php

define("Factor",9/5) ;
define("Offset",32) ;

echo "Enter Temperature Value : " ;
$temperature = (float) readline() ;

echo "Convert to (1: Fahrenheit, 2: Celsius): " ;
$choice = (int) readline() ;

switch($choice){
    case 1:
        $result = $temperature * Factor + Offset ;
        echo "Temperature in Fahrenheit : $result\n " ;
        break ;
    case 2:
        $result = ($temperature - Offset) / Factor ;
        echo "Temperature in Celsius : $result\n " ;
        break ;
    default:
        echo "Invalid Choice" ;
        break ;
}