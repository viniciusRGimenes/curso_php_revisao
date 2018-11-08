<?php

$numero = 1;

$contador = $numero;

$divisao10 = 10;
$divisao5 = 5;
$divisao2 = 2;

$resto = $numero % $divisao10;

if($resto == 0 ){
   
    echo $numero . " è divisivel por 10". "<br>";
}
$resto = $numero % $divisao5;
if($resto == 0 ){
   
    echo $numero . " è divisivel por 5". "<br>";
}
$resto = $numero % $divisao2;
if($resto == 0 ){
   
    echo $numero . " è divisivel por 2". "<br>";
}
if($resto != 0){
    echo $numero. " Não é divisivel por nenhum";
}

?>