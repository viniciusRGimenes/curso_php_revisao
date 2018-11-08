<?php

$times = array("Palmeiras", 
"Internacinal",
"Flamengo",
"São Paulo",
"Gremio",
"Atletico-MG",
"Santos",
"Cruzeiro",
"Atletico-PR",
"Fluminense",
"Bahia",
"Corinthians",
"Vasco da Gama",
"Botafogo",
"Ceará SC",
"Sport Recife",
"America-MG",
"Chapecoense",
"Paraná",);


$escudos = array("Palmeiras", 
"Internacinal",
"Flamengo",
"São Paulo",
"Gremio",
"Atletico-MG",
"Santos",
"Cruzeiro",
"Atletico-PR",
"Fluminense",
"Bahia",
"Corinthians",
"Vasco da Gama",
"Botafogo",
"Ceará SC",
"Sport Recife",
"America-MG",
"Chapecoense",
"Paraná",);

foreach($times as $time){
    foreach($escudos as $escudo){
        if( $time == $escudo){
            echo "";
        }else{
            echo $time ." X ". $escudo . "<br>";
        }
        
    }
}

?>