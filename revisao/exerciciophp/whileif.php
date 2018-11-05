<?php
$numeroInicial = 5000;
$numeroFinal = 5543;

$divisor = 2;

$contador = $numeroInicial;

while($contador <= $numeroFinal){
    $resto = $contador % $divisor;
    if($resto == 0){
        echo $contador."<br>";
    }
    $contador += 1;
}
?>