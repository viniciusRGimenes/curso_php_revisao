<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Tarefas</title>
</head>
<body>
    <form action="gravar_tarefa.php" method="post">
        <input type="text" name="nome" placeholder="Nome"><br><br>
        <textarea type="text" rows="5" cols="50" name="detalhes" placeholder="Detalhes"></textarea><br><br>
        <label>Status</label><br>
        <select name="status">
            <option value="1">Ativado</option>
            <option value="0"> Desativado</option>
        </select><br><br>
        <input type="submit" value="Gravar"/>
    </form>
    
</body>
</html>