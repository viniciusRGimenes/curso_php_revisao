<?php

$personalidadesHistoricas = array("Leonardo da Vinci",
"Thomas Edison",
"Issac Newton",
"Nero",
"Mahatma Gandhi",
"Freud",
"Clarisse Lispector",
"Tarsila do Amaral",
"Tutankamon",
"William Shakespeare",
"Cristóvão Colombo",
"John F. Kennedy", 
"Isabel Cristina",
"Mary Anderson",
"Frida Kahlo",
"Amelia Earhart",
"Santos",
"Santos Dumont",
"Michael Jackson",
"Henry Ford",
);

asort($personalidadesHistoricas);
echo "Ordem alfabetica<br><br>";
foreach($personalidadesHistoricas as $personHist){
    echo $personHist."<br>";
}

rsort($personalidadesHistoricas);
echo "<br><br> Ordem reversa<br><br>";
foreach($personalidadesHistoricas as $personHist){
    echo $personHist."<br>";
}

shuffle($personalidadesHistoricas);
echo "<br><br> Ordem Aleatória<br><br>";
foreach($personalidadesHistoricas as $personHist){
    echo $personHist."<br>";
}

?>