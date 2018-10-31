<?php

class Conta{

    private $numero;
    private $cliente;

    public function setNumero($valor){
        $this->numero = $valor;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function setCliente($plano){
        $this->cliente = $plano;

    }

    public function getCliente(){
        return $this->cliente;
    }
}

$pessoa1 = new Conta;
$pessoa1->setNumero("0000055-8");
$pessoa1->setCliente('premium');

echo "O numero da conta é ". $pessoa1->getNumero()."<br>";
echo "Seu plano é ". $pessoa1->getCliente()."<br>";


