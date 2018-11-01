<?php

class Conta{

    private $numero;
    private $cliente;
    private $endereco;

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

    public function setEndereco($rua){
        $this->endereco = $rua;
    }
    public function getEndereco(){
        return $this->endereco;
    
    }
}

$pessoa1 = new Conta;
$pessoa1->setNumero("0000055-8");
$pessoa1->setCliente('premium');
$pessoa1->setEndereco('Almeria');

echo "O numero da conta é ". $pessoa1->getNumero()."<br>";
echo "Seu plano é ". $pessoa1->getCliente()."<br>";
echo "Sua Rua é ". $pessoa1->getEndereco()."<br>";

?>