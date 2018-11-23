<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Tarefas</title>
</head>
<body>
    <form action="gravar_tarefa.php" method="post">

        <input type="text" name="nome" placeholder="Tarefa:"/><br><br>

        <textarea name="detalhes" placeholder="Detalhes:"></textarea><br><br>

        <input type="checkbox" name="status"/><label>Concluída</label><br><br>

        <input type="submit" value="gravar" />
        
        <input type="hidden" name="id" value="<?=$id?>" />

    </form>
    <br><br>
        <a href="listar_tarefas.php">Voltar</a>
</body>
</html>