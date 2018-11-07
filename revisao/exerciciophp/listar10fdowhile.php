<?php

$funcionarios = array("Jhon", "Michael", "Charles", "Daniel", "Paulo", "Moacir", "Donald", "Manuel", "Miguel", "Marcus");
$totalDeFuncionarios = count($funcionarios);

$contador = 0;

do{
    echo $funcionarios[$contador] . "<br>";

    $contador++;
}while($contador < $totalDeFuncionarios)

?>
