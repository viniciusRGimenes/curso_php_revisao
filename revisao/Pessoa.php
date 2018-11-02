<?php

class Pessoa{
    
    private $nome;
    public $endereco;
    protected $estudante;

    public function setNome($valor){
        $this->nome = $valor;
    }

    public function getNome(){
        $nome = $this->nome;
        return $this->transformUpperCase($nome);
    }

    private function transformUpperCase($palavra){
        return strtoupper($palavra);
    }

    public function setEstudante($valor){
        $this->estudante = $valor;
    }


}