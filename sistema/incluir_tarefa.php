<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Tarefas</title>
</head>
<body>

<?php
    $id = $_GET["id"];

    require_once("criar_conexao.php");

    $sql = "SELECT * FROM tarefas ";
    $sql .= "WHERE id = ".$id;

    $result = $conn->query($sql);

    if($result->num_rows > 0){

        $row = $result->fetch_assoc();
        $id = $row["id"];
        $nome = $row["nome"];
        $detalhes = $row["detalhes"];
        $status = $row["status"];
    }elseif($id >0){
        echo "Não existe tarefa com o ID: ".$id."<br><br>";
        echo "<a href='index.php'>Voltar</a><br><br>";

        die();
    }
?>
    <form action="gravar_tarefa.php" method="post">

        <input type="text" name="nome" placeholder="Tarefa:" value="<?php echo $nome; ?>"/><br><br>

        <textarea name="detalhes" placeholder="Detalhes:"><?php echo $detalhes; ?></textarea><br><br>

        <input type="checkbox" name="status" <?php if($status==1){echo "checked"; }; ?> /><label>Concluída</label><br><br>

        <input type="submit" value="Gravar" />
        
        <input type="hidden" name="id" value="<?=$id?>" />

    </form>
    <br><br>
        <a href="listar_tarefas.php">Voltar</a>
</body>
</html>