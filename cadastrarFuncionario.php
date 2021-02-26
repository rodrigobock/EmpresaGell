<?php

include_once './conexao.php';
$nome = $_POST["nome"];
$salario = $_POST["salario"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];
$login = $_POST["login"];
$senha = $_POST["senha"];

$sql = "INSERT INTO Funcionario VALUES (NULL, '$nome', $salario,'$email','$cpf','$telefone','$login','$senha');";
mysqli_query($conexao, $sql) or die("Erro ao cadastrar o funcionário!");
echo "Cadastrado com sucesso!";
header("Refresh: 3, index.php");
