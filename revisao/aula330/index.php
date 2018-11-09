<?php

$servidor = "revisao_db_1";
$usuario = "root";
$senha = "phprs";
$banco = "curso_php";


$conn = new mysqli($servidor, $usuario, $senha, $banco);
if($conn->connect_error){
    die("A conexão falhou". $conn->connect_error);
}
$sql = "SELECT * FROM `tarefas`";
$result = $conn->query($sql);

if($result->num_rows > 0 ){
    echo "Total de registros: ". $result->num_rows ."<br>"."<br>";


    while($row = $result->fetch_assoc()){
        echo $row["id"]. "<br>";
        echo $row["nome"]."<br>";
        echo $row["status"]."<br>";
    }
}else{
    echo "Nehum registro(s) encontrado(s)";
}