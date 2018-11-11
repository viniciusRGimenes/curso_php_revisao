<?php
$servidor = "revisao_db_1";
$usuario = "root";
$senha = "phprs";
$banco = "curso_php";

$nome = $_POST["nome"];
$detalhes = $_POST["detalhes"];
$status = $_POST["status"];
$id = $_POST["id"];

$conn = new mysqli($servidor, $usuario, $senha, $banco);
if($conn->connect_error){
    die("A conexão falhou". $conn->connect_error);
}

if($id > 0){
    $sql = "UPDATE tarefas SET ";
    $sql .= "nome = '".$nome."' ";
    $sql .= ",detalhes = '".$detalhes."' ";
    $sql .= ",status = '".$status."' ";
    $sql .= "WHERE id = " .$id;
}else{
    $sql = "INSERT INTO tarefas (nome, detalhes,status) VALUES ( '$nome', '$detalhes', '$status')";
}

if($conn->query($sql)===TRUE){
    echo "Dados Inseridos com sucesso!"."<br>";
}else{
    echo "Erro" . $conn_error;
}
$conn->close();

?>
<a href="index.php">Voltar</a>