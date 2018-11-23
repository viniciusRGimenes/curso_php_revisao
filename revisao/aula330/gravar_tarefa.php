<?php
$servidor = "revisao_db_1";
$usuario = "root";
$senha = "phprs";
$banco = "curso_php";

$email = $_POST["email"];
$senhausu = $_POST["senhausu"];
$status = $_POST["status"];
$id = $_POST["id"];

$conn = new mysqli($servidor, $usuario, $senha, $banco);
if($conn->connect_error){
    die("A conexão falhou". $conn->connect_error);
}

if($id > 0){
    $sql = "UPDATE tarefas SET ";
    $sql .= "email = '".$email."' ";
    $sql .= ",senhausu = '".$senhausu."' ";
    $sql .= ",status = '".$status."' ";
    $sql .= "WHERE id = " .$id;
}else{
    $sql = "INSERT INTO tarefas (email, senhausu,status) VALUES ( '$email', '$senhausu', '$status')";
}

if($conn->query($sql)===TRUE){
    echo "Dados Inseridos com sucesso!"."<br>";
}else{
    echo "Erro" . $conn_error;
}
$conn->close();

?>
<a href="listar_tarefas.php">Voltar</a>