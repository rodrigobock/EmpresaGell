<?php

include_once 'conexao.php';

if (!isset($_POST["cadastrar"])) {
    header("Location: index.php");
}

$nome = $_POST["nome"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];
$login = $_POST["login"];
$senha = $_POST["senha"];
$endereco = $_POST["rua"];

$sql = "INSERT INTO Cliente VALUES (NULL, '$nome','$email','$cpf','$telefone','$login','$senha','$endereco');";
mysqli_query($conexao, $sql) or die("Erro ao cadastrar o cliente!");
echo 'Cadastrado com sucesso!';
header("Refresh: 3, index.php");
