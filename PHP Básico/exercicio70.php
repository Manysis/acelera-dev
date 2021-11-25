<?php 

public interface AnimalOrcamento extends Animal{
    public ItemOrcamentoComplexo orcamentoGastosAnimal();
}

class Animal {
    public function AnimalOrcamento($animais){
        foreach($animais as $animal){
            if($animal->vacina == "Vacina w")
            {
                $animaisVacinaW = $AnimaisVacinaW+$animal; 
            }
        }
    }
}

