<?php

function soma($num1, $num2)
{
    $soma = $num1+$num2;
    return $soma;
}

function parimpar($num1)
{

    if($num1 %2 == 0)
    return "Numero par";
    else
    return "Numero impar";
}

function numcarac($string)
{
    $numcarcterstring = strlen( $string);
    return $numcarcterstring;

}
?>