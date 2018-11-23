<!DOCTYPE html>
<head>
    <title>tarefas</title>
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

    <br><br>
    <a href="incluir_tarefa.php">Incluir</a>
    <br><br>
    <?php

    require_once("criar_conexao.php");

    $sql = "SELECT * FROM tarefas";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        
        echo $result->num_rows . " registro(s) listado(s).<br><br>";
        echo "<table>";
        echo "<tr><th>Id</th><th>Nome</th><th>Detalhes</th><th>Status</th></tr>";

        while($row = $result->fetch_assoc()){

            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["nome"]."</td>";
            echo "<td>".$row["detalhes"]."</td>";
            echo "<td>".$row["status"]."</td>";
            echo "</tr>";
        }

        echo "</table";
    }else{
        echo "Nada";
    }


    $conn->close();

    ?>
</body>
</html>
