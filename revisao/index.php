<?php

require_once("Pessoa.php");
require_once("Funcoes.php");
require_once("Aluno.php");

$pessoa = new Pessoa();
$pessoa->setNome("Pedro");
$pessoa->setEstudante("Nao");
imprimir($pessoa->getNome());


$aluno = new Aluno();
$aluno->setNome("Vinicius");
$aluno->setDisciplina("Magento 1 User");
$aluno->setEstudante("Sim");
imprimir($aluno->getNome());
imprimir($aluno->getDisciplina());
imprimir($aluno->getEhEstudante());


