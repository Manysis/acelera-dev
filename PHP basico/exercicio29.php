<?php
$mesoregios = file_get_contents('https://servicodados.ibge.gov.br/api/v1/localidades/mesorregioes');

var_export($mesoregios);
?>
