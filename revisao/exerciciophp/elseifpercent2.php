<?php

$nome = "Jhon";
$salario = 2001;


if($salario <= 1000):
    echo "Você é muito pobre pra pagar imposto";
elseif($salario <= 1500):
    echo "Você dara o dizimo para o governo";
elseif($salario <= 2000):
    echo "Manda 15% para o goerno";
else:
    echo "Manda 20% porque você tem muito";
endif;

?>