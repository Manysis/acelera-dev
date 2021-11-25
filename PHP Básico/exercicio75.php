<?php

class aluno {
 private $matricula;
 private $nome;
 private $sobenome;
 private $cpf;
 private $rg;
 private $idade;
 private $nivelesecolar;

 public function realizaMatricula($cpf){
    echo "Matricula realizada com sucesso";
}
public function realizaRquerimento($cpf){
    echo "Requerimento realizado com sucesso";
}
public function solicitacertificado($cpf){
    echo "Certificado solicitado  com sucesso";
}

}

class turma{
    protected $ano;
    protected $nome_turma;
    protected $alunos;
    protected $capacidade;

    public function listarAlunos(){
        echo "Lista de alunos";
    }
    public function exibeVagas(){
        echo "Exibe vagas";
    }
    pubic function adicionaAluno(Aluno $aluno){
        echo "Aluno adicionado";
    }
}


}