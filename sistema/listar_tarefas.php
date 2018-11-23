<?php

header("content-type:text/html; charset=ISO-8859-1");

$servidor = "revisao_db_1";
$usuario = "root";
$senha = "phprs";
$banco = "sistema_curso_php";

$conn = new mysqli($servidor, $usuario, $senha, $banco);
if($conn->connect_error){
    die("A conexão falhou". $conn->connect_error);
}

$sql = "SELECT * FROM tarefas";
$result = $conn->query($sql);

if($result->num_rows > 0){

    while($row = $result->fetch_assoc()){

        echo "Id: ".$row["id"]."<br>";
        echo "Nome: ".$row["nome"]."<br>";
        echo "Detalhes: ".$row["detalhes"]."<br>";
        echo "Status: ".$row["status"]."<br>";
    }
}else{
    echo "Nada";
}


$conn->close();

?>