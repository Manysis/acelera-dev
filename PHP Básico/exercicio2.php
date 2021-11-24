<?php

$cursos = ["php",  "java", "python"];
$pessoas = ["João",  "Pedro", "Clara"];
$lojas = ["Centro",  "Zona Sul", "Zona Oeste"];
$flag = 0 ;

echo "<br><br>Cursos<br>";
foreach ($cursos as $curso) {
    
    echo $flag. "=>". $curso."<br>";
    $flag++;
 }
 $flag = 0 ;
echo "<br><br>Pessoas<br>";
 foreach ($pessoas as $pessoa) {
     
    echo $flag. "=>". $pessoa."<br>";
    $flag++;
 }
 $flag = 0 ;
 echo "<br><br>Lojas<br>";
 foreach ($lojas as $loja) {
    echo $flag. "=>".$loja."<br>";
    $flag++;
 }


?>