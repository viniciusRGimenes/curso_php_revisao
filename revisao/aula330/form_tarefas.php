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
            $email = $row["email"];
            $senhausu = $row["senhausu"];
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
        <input type="email" name="email" placeholder="email" value="<?=$email?>"><br><br>
        <input type="password"name="senhausu" placeholder="senha" value="<?=$senhausu?>"><br><br>
        <label>Status</label><br>
        <select name="status">
            <option value="1" <?$row=["status"]==0?"SELECTED":"";?> >Ativado</option>
            <option value="0" <?$row=["status"]==1?"SELECTED":"";?>> Desativado</option>
        </select><br><br>
        <input type="submit" value="Gravar"/>
        <input type="hidden" name="id" value="<?=$id?>" />
    </form>
    <br><br>
        <a href="listar_tarefas.php">Voltar</a>
</body>
</html>