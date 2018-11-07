<?php

$tabuada = 1;
$tabuadaFinal = 10;

while($tabuada <= $tabuadaFinal){
    $resultado = $tabuada  * $tabuadaFinal;
    echo $tabuada . " X " . $tabuadaFinal . " = ". $resultado . "<br>";
    $tabuada += 1;
}

