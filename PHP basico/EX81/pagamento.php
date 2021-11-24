<?php

interface pagamento
{
    public function status();
    public function verificaMeioPagamento();
    public function mostraQuantidadesParcelas();
    public function aplicaDesconto();
    public function aplicaJuros();
    public function aplicaTaxa();
    protected   atualizaStatus();
    protected   criaIndentificador($aluno);
}

class pix implements pagamento{
    Private $id;
    Private $chave;
    Private $conta;

    public function status(){
        echo "Faz Status";
    }
    public function verificaMeioPagamento(){
        echo "Verifica pagamento ";
    }
    public function mostraQuantidadesParcelas(){
        echo "Parcelas Status";
    }
    public function aplicaDesconto(){
        echo "Faz desconto";
    }
    public function aplicaJuros(){
        echo "Faz Juros";
    }
    public function aplicaTaxa(){
        echo "Faz Status";
    }
    public function atualizaStatus(){
        echo "Faz Status";
    }
}

?>