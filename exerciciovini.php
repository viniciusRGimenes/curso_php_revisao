<?php

    class Veiculo {

        private $velocidade;
        private $potencia;

        public function setVelocidade($velocidade){
            $this->velocidade = $velocidade;
        }

        public function getVelocidade(){
            return $this->velocidade;
        }

        public function setPotencia($potencia){
            $this->potencia = $potencia;
        }

        public function getPotencia(){
            return $this->potencia;
        }
    }





class Barco extends Veiculo{
    private $mastro;
    
    public function setMastro($altura){
        $this->mastro = $altura;
    }

    public function getMastro(){
        return $this->mastro;
    }
}

$meuBarco = new Barco('Barco do mal');
$meuBarco->setMastro('2 metros pq não entendo');
echo "<p>Altura do mastro é " .$meuBarco->getMastro()."</p>";
$barco = new Veiculo();
$barco->setVelocidade(3);
$barco->setPotencia('6,5 CV');

echo "A velocidade do barco é de  " .$barco->getVelocidade()." nós!"."<br><br>";
echo "A potencia do barco é ".$barco->getPotencia()."<br><br>";



class Aviao extends Veiculo{
    private $cheio;

   public function setCheio($tanque){
       $this->cheio = $tanque;

   }

   public function getCheio(){
       return $this->cheio;
   }
}

$meuAviao = new Aviao('Aviao do caos');
$meuAviao->setCheio('4 Horas');
$meuAviao->setVelocidade('1000 Km/h');
$meuAviao->setPotencia('8000 CV');
echo "O tempo de voo é de ". $meuAviao->getCheio()."<br><br>";
echo "A velocidade do barco é de  " .$meuAviao->getVelocidade()." nós!"."<br><br>";
echo "A potencia do barco é ".$meuAviao->getPotencia()."<br><br>";



class Fusca extends Veiculo{
    private $combustivel;
    public $acelerar;
    public $frear;

    public function setCombustivel($combustivel){
        $this->combustivel = $combustivel;
    }

    public function getCombustivel(){
        return $this->combustivel;
    }
}

$meuFusca = new Fusca('fusca azul');
$meuFusca->setCombustivel('etanol');
$meuFusca->setVelocidade(0);
$meuFusca->setPotencia('30 cv');
echo "Tanque com  ". $meuFusca->getCombustivel()."<br><br>";
echo "A velocidade do fusca é de  " .$meuFusca->getVelocidade()."<br><br>";
echo "A potencia do fusca é ".$meuFusca->getPotencia()."<br><br>";

if(setVelocidade==0){
    echo "Desligado";
}else{
    echo "ligado";

}
?>