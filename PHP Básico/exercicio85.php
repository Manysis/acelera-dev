<?php   

interface arma{
    public function usararma();
}

class faca implements  arma
{

    public  function usararma(){
        echo "Arma usada";
    }
}
class marchado implements  arma
{

    public  function usararma(){
        echo "Arma usada";
    }
}
class espada implements  arma
{

    public  function usararma(){
        echo "Arma usada";
    }
}

class arcoeflecha implements  arma
{

    public  function usararma(){
        echo "Arma usada";
    }
}


abstract class personagem{

    private $arma;

    public function lutar(){

    }
}

class rei extends personagem{

    public function lugar(){
        echo "Lutando";
    }
}
class rainha extends personagem{

    public function lugar(){
        echo "Lutando";
    }
}
class duende extends personagem{

    public function lugar(){
        echo "Lutando";
    }
}
class guerreiro extends personagem{

    public function lugar(){
        echo "Lutando";
    }
}
?>