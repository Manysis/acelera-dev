<?php

public function correntistasForaVermelho(CorrentistasDespesas $despesas)
{
    foreach($despesas as $despesa){
       
        if($despesa->valor < $despesas->saldo)
        {
            $correntistasForaVermelhor = $correntistasForaVermelhor+$despesas->id_correntista;
        }
    }
    
    return $correntistasForaVermelhor;
}