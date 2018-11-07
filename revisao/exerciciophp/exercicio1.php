<?php

$numero1 = 1;
$numero2 = 15;

$resultado = $numero1 += $numero2;

if($resultado > 20){
    $resultado += 8;
    echo $resultado;
}else{
    $resultado += 5;
    echo $resultado;
}
?>