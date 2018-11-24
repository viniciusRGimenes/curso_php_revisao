<?php
    $servidor = "revisao_db_1";
    $usuario = "root";
    $senha = "phprs";
    $banco = "sistema_curso_php";

    $conn = new mysqli($servidor, $usuario, $senha, $banco);
    if($conn->connect_error){
        die("A conexão falhou". $conn->connect_error);
    }
?>