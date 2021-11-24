<?php
$distritos = file_get_contents('https://servicodados.ibge.gov.br/api/v1/localidades/distritos');

$obj = (object) array($distritos);
var_export($obj);
?>
