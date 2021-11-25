<?php

class despesas extends despesasMes{

    public function  __construct($cpf, $despesas)
    {

    }
    public function getCpf($cpf)
    {
        echo "CPF é".$cpf;
    }

    public function totaldespesas($mes)
    {
        echo "Total de despesas do mes".$mes
    }
}