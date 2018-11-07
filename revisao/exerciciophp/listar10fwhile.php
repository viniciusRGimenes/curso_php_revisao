<?php

$funcionarios = array("Jhon", "Michael", "Charles", "Daniel", "Paulo", "Moacir", "Donald", "Manuel", "Miguel", "Marcus");
$totalDeFuncionarios = count($funcionarios);

$contador = 0;

while($contador < $totalDeFuncionarios){
    echo $funcionarios[$contador] . "<br>";

    $contador++;
}

?>
