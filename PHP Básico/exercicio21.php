<?php

$Val1 = [0,1,2,3,4,5,6,7,8,9, 10,11,12,13,14,15,16];
$Val2 = null;
$Val3 = "6";
$Val4 = ["João", "Pedro", "Clara", "Liz", "Ronaldo", "Danilo", "Tecila", "Jose", "Maria", "Jany"];
$Val5 = "6";


if(is_null($Val1))
{

    echo "<br> Essa variável é nula ";
}
elseif(is_array($Val1))
{

    var_export($Val1);

}

echo "<br>";

if(is_null($Val2))
{

    echo "<br> Essa variável é nula ";
}
elseif(is_array($Val2))
{

    var_export($Val2);

}

echo "<br>";

if(is_null($Val3))
{

    echo "<br> Essa variável é nula ";
}
elseif(is_array($Val3))
{

    var_export($Val3);

}

echo "<br>";

if(is_null($Val4))
{

    echo "<br> Essa variável é nula ";
}
elseif(is_array($Val4))
{

    var_export($Val4);

}

echo "<br>";

if(is_null($Val5))
{

    echo "<br> Essa variável é nula ";
}
elseif(is_array($Val5))
{

    var_export($Val5);

}

echo "<br>";
?>