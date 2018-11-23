<?php

require_once("criar_conexao.php");

$sql= "DELETE FROM tarefas WHERE id = ". $_GET["id"];

if($conn->query($sql)===TRUE){
    echo "registro apagado";
}else{
    echo "registro permanece". $conn->error;
}
$conn->close();

?>
<br><br>
<a href="index.php">Retornar</a>