<?php 
class MyExpenses {
    public $despesasDiaMes = [];
    public $cpf;

    public function __construct($cpf, $despesasDiaMes)
    {
        
    }

    public function getCpf(){
        $cpf = $this->cpf ;
        return $cpf;
    }
    public function totalizaMes($mes){
        $despesas = "Despesas do mes".$mes;
        return $despesas;
    }

    public function GravaInfos(DespesaMes $despesaMes){
        $despesaMes->nomeTitular;


    }

}


class DespesaMes{
    private  $mes;
    private  $valor; 
    public function DespesaMes($mes, $valor){
        $this->mes= $mes;
        $this->valor=$valor;
        
    }

    public function getMes(){
        return $this->mes;
    }
    public function getValor(){
        return $this->valor;
    }
}

class DespesaDia  extends DespesaMes{
    private $dia;
    public function DespesaDia($dia, $mes, $valor){
        $this->getMes(); 
        $this->getValor();
      }
    public function getDia(){
        return $this->dia;
    }
}

