<?php

define("UserName","Alex") ;
define("Password","12345") ;

echo "Enter UserName : " ;
$InputUserName = readline() ;

echo "Enter Password : " ;
$InputPassword = readline() ;

if( $InputUserName === UserName && $InputPassword === Password ){
    echo "Login Successful" ;
}else{
    if(empty($InputUserName) || empty($InputPassword)){
        echo "The UserName Or Password is Blank.\n" ;
    }else{
        echo "Invalid UserName Or Password." ;
    }
}
