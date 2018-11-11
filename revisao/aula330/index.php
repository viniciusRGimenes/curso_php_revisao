<!DOCTYPE html>
<html>
<head>
    <title>Tarefas</title>
    <style>
        table{
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width:100%;
        }
        th, td{
            border:1px solid black;
            text-align:left;
            padding:8px;
        }
        tr:nth-child(even){
            background-color:silver;
        }

    </style>
</head>
<body>
<a href="form_tarefas.php">Incluir</a>
<br><br>
<?php
$servidor = "revisao_db_1";
$usuario = "root";
$senha = "phprs";
$banco = "curso_php";


$conn = new mysqli($servidor, $usuario, $senha, $banco);
if($conn->connect_error){
    die("A conexão falhou". $conn->connect_error);
}
$sql = "SELECT * FROM `tarefas`";
$result = $conn->query($sql);

if($result->num_rows > 0 ){
    echo "Total de registros: ". $result->num_rows ."<br>"."<br>";
    echo "<table>";
    echo"<tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Detalhes</th>
            <th>Status</th>
            <th></th>
            </tr>";


    while($row = $result->fetch_assoc()){
      

        echo "<tr>";

        echo "<td>". $row["id"]. "</td>"    ;
        echo "<td>". $row["nome"]."</td>";
        echo "<td>". $row["detalhes"]. "</td>";
        if($row["status"]===0){
            echo "<td>". "desativado". "</td>";
        }else{
            echo "<td>". "Ativado"."</td>";
        }
        echo "<td>";
        echo "<a href='apagar_tarefa.php?id=".$row["id"]."'>Apagar</a>";
        echo "&nbsp;|&nbsp";
        echo "<a href='form_tarefas.php?id=".$row["id"]."'>Editar</a>";
        echo "</td>";
        echo "</tr>";
    }
        echo "</table>";
}else{
    echo "Nehum registro(s) encontrado(s)";
}
?>

</body>
</html>


