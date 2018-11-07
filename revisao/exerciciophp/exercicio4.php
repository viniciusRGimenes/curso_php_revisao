<?php

$random = rand (1,20);

switch($random){
    case(1):
        echo $random . " Janeiro";
        break;
    case(2):
        echo $random . " Fevereiro";
        break;
    case(3):
        echo $random . " Março";
        break;
        case(4):
        echo $random . " Abril";
        break;
        case(5):
        echo $random . " Maio";
        break;
        case(6):
        echo $random . " Junho";
        break;
        case(7):
        echo $random .  " Julho";
        break;
        case(8):
        echo $random . " Agosto";
        break;
        case(9):
        echo $random . " Setembro";
        break;
        case(10):
        echo $random . " Outubro";
        break;
        case(11):
        echo $random . " Novembro";
        break;
        case(12):
        echo $random . " Dezembro";
        break;
        case($random > 12);
        echo $random . " Não Existe o mês correspondente";
        break;
}