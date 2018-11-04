<?php

class Conta{

    private $numero;
    private $cliente;
    protected $sacar;
    protected $depositar;

    public function setNumero($numeroconta){
        $this->numero = $numeroconta;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function setCliente($nome){
        $this->cliente = $nome;
    }
    public function getCliente(){
        return $this->cliente;
    }
    public function setSacar($saque){
        $this->sacar = $saque;
    }
    public function getSacar(){
        return $this->sacar;
    }
    public function setDepositar($colocanaconta){
        $this->depositar - $colocanaconta;
    }
    public function getDepositar(){
        return $this->despositar;
    }
}

class Corrente extends Conta{
    private $CreditoPessoal;

    public function setCreditoPessoal($creditocorrente){
        $this->creditopessoal = $creditocorrente;
    }
    public function getCreditoPessoal(){
        return $this->creditopessoal;
    }
}

class Poupanca extends Conta{
    private $juros;

    public function setJuros($maisnaconta){
        $this->juros = $maisnaconta;
    }
    public function getJuros(){
        return $this->juros;
    }
}

$vini = new Conta();
$vini->setNumero('0000011-5');
$vini->setCliente('Premuim');

echo "Conta n ". $vini->getNumero()."<br>";
echo "Plano ". $vini->getCliente()."<br><br>";

$jhon = new Poupanca();
$jhon->setNumero('0004388-2');
$jhon->setCliente('Basico');
$jhon->setDepositar('1000');
$jhon->setJuros(0.3);

echo "Conta n ". $jhon->getNumero(). "<br>";
echo "Plano ". $jhon->getCliente(). "<br>";
echo "valor de saque ". $jhon->getDepositar(). "<br><br>";


?>