<?php

$array = file_get_contents('https://rickandmortyapi.com/api');

if($array == null)
{
    echo "Você não pode continuar";

}



if(is_array($array))
{
var_dump($array);
}

?>