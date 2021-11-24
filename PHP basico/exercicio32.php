<?php
$precos = [
    "Produto1"=>1.23, 
    "Produto2"=>32.50,
    "Produto3"=> 45.53,
    "Produto4"=> 15.53, 
    "Produto5"=>63.53, 
    "Produto6"=>80.90,
    "Produto7"=> 45.21,
    "Produto8"=> 60.52, 
    "Produto9"=>42.15, 
    "Produto10"=>32.50, 
    "Produto11"=>45.53, 
    "Produto12"=>15.53];

    $pagamento = 1;
    $compra = 'Produto1';

    if($pagamento == 1)
    {
        echo "Cartão, valor original R$:". $precos->Produto1." - Valor Final :
        $variavel”. ";
    }