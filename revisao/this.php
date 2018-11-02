<?php


class Pessoa{
	
	public function getThis(){
		if(isset($this)){
			print "<pre>";
			var_dump($this);
			print "</pre>";
		}else{
			echo "Classe não instanciada!";
		}

	}

}


Pessoa::getThis();
echo "<br>";
$pedro = new Pessoa();
$pedro->getThis();
echo "<br>";
$marcio = new Pessoa();
$marcio->getThis();
echo "<br>";

