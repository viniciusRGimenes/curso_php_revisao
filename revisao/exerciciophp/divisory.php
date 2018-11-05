<?php

$numeroInicial = 1;
$numeroFinal = 100;

$divisor = 10;

$contador = $numeroInicial;

while($contador <= $numeroFinal){
    $resto = $contador % $divisor;
    if($resto == 0){
        echo $contador."<br>";
    }
    $contador += 1;
}

?>