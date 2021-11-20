<?php

$texto = "O PHP (um acrônimo recursivo para PHP: Hypertext Preprocessor) é uma
linguagem de script open source de uso geral, muito utilizada, e especialmente
adequada para o desenvolvimento web e que pode ser embutida dentro do HTML.";

$textominusculo = strtolower($texto);
$textomaiusculo = strtoupper($texto);
$textprimeiraletramaiusculo = mb_convert_case($texto, MB_CASE_TITLE, "UTF-8");


echo $textominusculo."<br><br>".$textomaiusculo."<br><br>".$textprimeiraletramaiusculo



?>