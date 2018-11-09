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
    echo"<tr><th>Id</th><th>Nome</th><th>Status</th></tr>";


    while($row = $result->fetch_assoc()){

        echo "<tr>";

        echo "<td>". $row["id"]. "</td>"    ;
        echo "<td>". $row["nome"]."</td>";
        echo "<td>". $row["status"]."</td>";

        echo "</tr>";
    }
        echo "</table>";
}else{
    echo "Nehum registro(s) encontrado(s)";
}
?>

</body>
</html>


