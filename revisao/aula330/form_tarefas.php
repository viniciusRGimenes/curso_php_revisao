<?php

$idTarefa = $_GET["id"];

    if($idTarefa > 0){
    
        $servidor = "revisao_db_1";
        $usuario = "root";
        $senha = "phprs";
        $banco = "curso_php";
        
        $conn = new mysqli($servidor, $usuario, $senha, $banco);
        if($conn->connect_error){
            die("A conexão falhou". $conn->connect_error);
        }
        
        $sql = "SELECT * FROM tarefas WHERE id = " .$idTarefa;

        $result = $conn->query($sql);
        if($result->num_rows > 0){

            $row = $result->fetch_assoc();
            $id = $row["id"];
            $nome = $row["nome"];
            $detalhes = $row["detalhes"];
            $status = $row["status"];
        }
    }



?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Tarefas</title>
</head>
<body>
    <form action="gravar_tarefa.php" method="post">
        <input type="text" name="nome" placeholder="Nome" value="<?=$nome?>"><br><br>
        <textarea type="text" rows="5" cols="50" name="detalhes" placeholder="Detalhes"><?=$detalhes?></textarea><br><br>
        <label>Status</label><br>
        <select name="status">
            <option value="1" <?$row=["status"]==0?"SELECTED":"";?> >Ativado</option>
            <option value="0" <?$row=["status"]==1?"SELECTED":"";?>> Desativado</option>
        </select><br><br>
        <input type="submit" value="Gravar"/>
    </form>
    
</body>
</html>