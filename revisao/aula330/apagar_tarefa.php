<?php
$servidor = "revisao_db_1";
$usuario = "root";
$senha = "phprs";
$banco = "curso_php";

$conn = new mysqli($servidor, $usuario, $senha, $banco);
if($conn->connect_error){
    die("A conexão falhou". $conn->connect_error);
}

$sql= "DELETE FROM tarefas WHERE id = ". $_GET["id"];

if($conn->query($sql)===TRUE){
    echo "registro apagado";
}else{
    echo "registro permanece". $conn->error;
}
$conn->close();

?>
<br><br>
<a href="index.php">Voltar</a>