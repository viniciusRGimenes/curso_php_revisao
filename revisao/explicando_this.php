<?php

class Carro{

    private $marca;

    public function  getAmoeba(){

        if(isset($this)){
            print("<pre>");
            print_r($this);
        }else{
            echo "Objeto não instanciado!<br>";
            echo "Objeto não foi criado!<br>";
        }
    }

}

echo "SEM INSTANCIAR<BR>";
Carro::getAmoeba();

echo "<p>";

echo "INSTANCIADO<BR>";
$tomover = new Carro();
$tomover->getAmoeba();

echo "<p>";
