<?php
    session_start();
    
$email = $_POST["email"];
$senha = $_POST["senha"];


$sql = "SELECT  * FROM  usuarios ";
$sql .= "WHERE email = '$email' AND senha = '$senha' ";

require_once("criar_conexao.php");

$result = $conn->query($sql);

if($result->num_rows == 1 ){
    $_SESSION["usuario_ja_autenticado"] = 1;
    echo "Usuario Autenticado com sucesso!<br>";
}else{
    echo "Dados Invalidos!";
}
?>
<br><br>
<a href="index.php">Retornar</a>