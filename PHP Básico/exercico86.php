<?php

abstract class file{

    private $size; 

    public function compactacao($compactacao){
    }
}


class image implements file{

    private $width;
    private $heidth;
    
    private $compactacao;

    public function compactacao($compactacao){
        echo "Compactação do tipo".$compactacao."feita com sucesso";
    }
}

class audio implements file{

    private $codec;
    private $duration;
    
    private $compactacao;

    public function compactacao($compactacao){
        echo "Compactação do tipo".$compactacao."feita com sucesso";
    }
}


class texto implements file{

    private $fontsize;
    
    private $compactacao;

    public function compactacao($compactacao){
        echo "Compactação do tipo".$compactacao."feita com sucesso";
    }
}