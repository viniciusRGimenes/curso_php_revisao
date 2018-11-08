<?php

$cidades = array( 
    array(
        "nome" => "São Paulo",
        "aniversario" => "25 de janeiro",
        "fundacao" => "1554 (464 anos)",
        "gentilico" => "Paulistano",
        "lema" => "Non dvcor dvco",
        "prefeito" => "Bruno Covas",
        "padroeiro" => "São Paulo",
    ),
    array(
        "nome" => "Rio de Janeiro",
        "aniversario" => "1° de março",
        "fundacao" => "1565 (453 anos)",
        "gentilico" => "Carioca",
        "lema" => "RECTE REM PVBLICAM GERERE",
        "prefeito" => "Marcelo Crivella",
        "padroeiro" => "São Sebastião",
    ),
    array(
        "nome" => "Belo Horizonte",
        "aniversario" => "12 de dezembro",
        "fundacao" => "1897 (120 anos)",
        "gentilico" => "Belo-horizontino",
        "lema" => "LIBERTAS QUÆ SERA TAMEN",
        "prefeito" => "Alexandre Kalil",
        "padroeiro" => "Nossa Senhora da Boa Viagem",
    ),
    array(
        "nome" => "Curitiba",
        "aniversario" => "29 de março",
        "fundacao" => "meados de 1661",
        "gentilico" => "curitibano",
        "lema" => "404",
        "prefeito" => "Rafael Greca",
        "padroeiro" => "Nossa Senhora da Luz",
    ),
    array(
        "nome" => "Fortaleza",
        "aniversario" => "13 de abril",
        "fundacao" => "726 (292 anos)",
        "gentilico" => "fortalezense",
        "lema" => "Fortitudine",
        "prefeito" => "Roberto Cláudio",
        "padroeiro" => "Nossa Senhora da Assunção",
    ),
);
foreach($cidades as $cidade){
    echo "Nome: " . $cidade["nome"] . "<br>";
    echo "Aniversario: " . $cidade["aniversario"]. "<br>";
    echo "Fundação: " . $cidade["fundacao"]. "<br>";
    echo "Gentílico: " . $cidade["gentilico"] . "<br>";
    echo "Lema: " . $cidade["lema"]. "<br>";
    echo "Prefeito atual; " . $cidade["prefeito"]. "<br>";
    echo "Padroeiro: " . $cidade["padroeiro"] . "<br>";
    echo "<hr>";

}

?>