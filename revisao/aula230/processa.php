<?php
echo "Nome completo: ". $_POST["nome"]. "<br>";

if($_POST["turma"]=="M"){
    echo "Turma Manhã"."<br>";
}elseif($_POST["turma"]=="T"){
    echo "Turma Tarde"."<br>";
}elseif($_POST["turma"]=="N"){
    echo "Turma Noite"."<br>";
}else{
    echo "Não informado"."<br>";
}
foreach($_POST["materias"] as $materias)
echo "Materia(s) Selecionada(s): ". $materias. "<br>";

?>