<?php
echo "Nome completo: ". $_POST["nome"]. "<br>";

if($_POST["turma"]=="M"){
    echo "Turma Manhã";
}elseif($_POST["turma"]=="T"){
    echo "Turma Tarde";
}elseif($_POST["turma"]=="N"){
    echo "Turma Noite";
}else{
    echo "Não informado";
}


?>