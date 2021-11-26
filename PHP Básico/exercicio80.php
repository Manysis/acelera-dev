<?php
    interface Perecivel{
        public function estaVencido():bool;
    }


    class InformacaoNulaException extends Exception{
        private $parametro;
        
        public function __construct(string $message = NULL, int $code = 0 , Throwable $previous = null, $paremetro)
        {
            parent::__construct($message, $code, $previous);
            $this->parametro = $paremetro;
        }
        
        public function getParametro(){
            return $this->parametro;
        }
    }
    abstract class Produto{
        protected $codigo;
        protected $preco;

        public function __construct($codigo, $preco)
        {   
            $this->codigo = $codigo;
            $this->preco = $preco;
        }

        public function getPreco()
        {
            return $this->preco;
        }
    }
    class DVD extends Produto{
        private $titulo;
        private $ano;

        public function __construct($codigo, $preco,$titulo, $ano)
        {

            $parametros = array('codigo' => $codigo, 'preco' => $preco, 'titulo' => $titulo, 'ano' => $ano);

            if(in_array(null, $parametros)){
                foreach($parametros as $nome => $valor){
                    if($valor == null){
                        throw new InformacaoNulaException('Parametro nulo', paremetro: $nome );
                    }
                }
            } 

            parent::__construct($codigo, $preco);
            $this->titulo = $titulo;
            $this->ano = $ano;
        }

        public function getAno()
        {
            return $this->ano;
        }
    }
    class Leite extends Produto implements Perecivel{
        private $marca;
        private $volume;
        private  DateTime $dataValidade;

        public function __construct($codigo, $preco, $marca, $volume, $dataValidade)
        {
            $parametros = array('codigo' => $codigo, 'preco' => $preco, 'marca' => $marca, 'volume' => $volume, 'dataValidade' => $dataValidade);

            if(in_array(null, $parametros)){
                foreach($parametros as $nome => $valor){
                    if($valor == null){
                        throw new InformacaoNulaException('Parametro nulo', paremetro: $nome );
                    }
                }
            } 

            parent::__construct($codigo, $preco);
            $this->marca = $marca;
            $this->volume = $volume;
            $this->dataValidade = $dataValidade;
        }

        public function estaVencido():bool
        {
            $dataAtual = new DateTime('NOW');
            return $this->dataValidade < $dataAtual;
        }
    }
?>