<?php

abstract class Pao{
  protected $nome;

  abstract function valor();

  function getNome(){
    return $this->nome;
  }

}

abstract class FuncionalidadeDecorator extends Pao{
  //metodos referentes as funcionalidades ou extensoes do pao
}

class Sal extends Pao{
  public function __construct()
  {
      $this->nome = "Sal";
  }

  function valor(){
    return 2.0;
  }
}

class Doce extends Pao{
  public function __construct()
  {
      $this->nome = "Doce";
  }

  function valor(){
    return 2.5;
  }
}

class salameMussarela extends FuncionalidadeDecorator{
  private $pao;

  function __construct(Pao $pao){
    $this->pao = $pao;
  }

  function getNome(){
      return $this->pao->getNome(). ", Salame+Mussarela";
  }

  function valor(){
    return 0.5 + $this->pao->valor();
  }
}

class Salame extends FuncionalidadeDecorator{
    private $pao;
  
    function __construct(pao $pao){
      $this->pao = $pao;
    }
  
    function getNome(){
        return $this->pao->getNome(). ", Salame";
    }
  
    function valor(){
      return 2 + $this->pao->valor();
    }
  }
  class Mussarela extends FuncionalidadeDecorator{
    private $pao;
  
    function __construct(pao $pao){
      $this->pao = $pao;
    }
  
    function getNome(){
        return $this->pao->getNome(). ", Mussarela";
    }
  
    function valor(){
      return 2 + $this->pao->valor();
    }
  }
  class OvoMussarela extends FuncionalidadeDecorator{
    private $pao;
  
    function __construct(pao $pao){
      $this->pao = $pao;
    }
  
    function getNome(){
        return $this->pao->getNome(). ", Ovo+Mussarela";
    }
  
    function valor(){
      return 2.5 + $this->pao->valor();
    }
  }
  class OvoMargarina extends FuncionalidadeDecorator{
    private $pao;
  
    function __construct(pao $pao){
      $this->pao = $pao;
    }
  
    function getNome(){
        return $this->pao->getNome(). ", Ovo+Margarina";
    }
  
    function valor(){
      return 2.5 + $this->pao->valor();
    }
  }
  class Margarina extends FuncionalidadeDecorator{
    private $pao;
  
    function __construct(pao $pao){
      $this->pao = $pao;
    }
  
    function getNome(){
        return $this->pao->getNome(). ", Margarina";
    }
  
    function valor(){
      return 2 + $this->pao->valor();
    }
  }
  class Ovo extends FuncionalidadeDecorator{
    private $pao;
  
    function __construct(pao $pao){
      $this->pao = $pao;
    }
  
    function getNome(){
        return $this->pao->getNome(). ", Ovo";
    }
  
    function valor(){
      return 2 + $this->pao->valor();
    }
  }

  
  class Geleia extends FuncionalidadeDecorator{
    private $pao;
  
    function __construct(pao $pao){
      $this->pao = $pao;
    }
  
    function getNome(){
        return $this->pao->getNome(). ", Geleia";
    }
  
    function valor(){
      return 2 + $this->pao->valor();
    }
  }
  class GeleiaSalame extends FuncionalidadeDecorator{
    private $pao;
  
    function __construct(pao $pao){
      $this->pao = $pao;
    }
  
    function getNome(){
        return $this->pao->getNome(). ", Geleia+Salame";
    }
  
    function valor(){
      return 2 + $this->pao->valor();
    }
  }
  class PastaAmendoimGeleia extends FuncionalidadeDecorator{
    private $pao;
  
    function __construct(pao $pao){
      $this->pao = $pao;
    }
  
    function getNome(){
        return $this->pao->getNome(). ", Pasta de amendoim+Geleia";
    }
  
    function valor(){
      return 2 + $this->pao->valor();
    }
  }
  class SalameDoce extends FuncionalidadeDecorator{
    private $pao;
  
    function __construct(pao $pao){
      $this->pao = $pao;
    }
  
    function getNome(){
        return $this->pao->getNome(). ", Salame";
    }
  
    function valor(){
      return 2 + $this->pao->valor();
    }
  }

  class PastaDeAmendoim extends FuncionalidadeDecorator{
    private $pao;
  
    function __construct(pao $pao){
      $this->pao = $pao;
    }
  
    function getNome(){
        return $this->pao->getNome(). ", Pasta de amendoim";
    }
  
    function valor(){
      return 2 + $this->pao->valor();
    }
  }

$sal = new Sal();
echo $sal->valor(). "<br><br>";
$uno = new GeleiaSalame($Sal);
echo $uno->getNome();
echo $uno->valor(). "<br><br>";
$uno = new Ovo($Sal);
echo $Sal->getNome();
echo $Sal->valor(). "<br><br>";


?>