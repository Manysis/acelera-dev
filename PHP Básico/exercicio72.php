<?php

$vetorC=[];
$vertorM=[];
$opracoesBanco;


foreach($vetorc as $correntista)
{
    foreach($vetorM as $movimento)
    {
        if($movimento->id_Correntista == $correntista->id)
        {
            $opracoesBanco = $opracoesBanco+$movimento;
        }
    }
}