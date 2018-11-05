<?php

$nome =  "Vinicius";
$sobrenome = "Gimenes";
$maioridadepenal = 18;


echo "Olá ". $nome . " ". $sobrenome. "<br>";
echo "Você é " . $maioridadepenal;


if($maioridadepenal >= 21){
    echo " maior de idade";
}else{
    echo " menor de idade";
}