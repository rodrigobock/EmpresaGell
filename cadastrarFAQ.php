<?php

include_once './conexao.php';
include_once './sessao.php';

if (!isset($_POST["cadastrar"]) || !isset($_SESSION["idFuncionario"])) {
    header("Location: index.php");
}

$pergunta = $_POST["pergunta"];
$resposta = $_POST["resposta"];
$idFuncionario = $_POST["idFuncionario"];

$sql = "INSERT INTO Pergunta VALUES (NULL, $idFuncionario, '$pergunta','$resposta');";
mysqli_query($conexao, $sql) or die("Erro ao cadastrar a pergunta!");
echo "Cadastrado com sucesso!";
header("Refresh: 3, index.php");
