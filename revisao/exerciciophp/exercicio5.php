<?php

$tabuada = 1;
$tabuadaFinal = 10;

$multiplicador = 60;

while($tabuada <= $tabuadaFinal){
    $resultado = $tabuada  * $multiplicador;
    echo $tabuada . " X " . $tabuadaFinal . " = ". $resultado . "<br>";
    $tabuada += 1;
}

?>