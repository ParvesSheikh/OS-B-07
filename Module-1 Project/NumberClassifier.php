<?php

echo "Enter a number : " ;
$number = (int) readline() ;

if( $number > 0 ){
    echo "The number is Positive.\n" ;
}elseif($number < 0){
    echo "The number is Negative.\n" ;
}else{
    echo "The number is Zero.\n" ;
}
