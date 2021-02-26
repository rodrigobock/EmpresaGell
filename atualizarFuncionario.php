<?php

include_once './conexao.php';

if (!isset($_POST["atualizar"])) {
    header("Location: index.php");
}
$idFuncionario = $_POST["idFuncionario"];
$nome = $_POST["nome"];
$salario = $_POST["salario"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];
$login = $_POST["login"];
$senha = $_POST["senha"];

$sql = "UPDATE Funcionario SET Nome='$nome', Salario=$salario, Email='$email', CPF='$cpf', Telefone='$telefone', Login= '$login', Senha= '$senha' WHERE idFuncionario=$idFuncionario";
mysqli_query($conexao, $sql) or die("Erro ao atualizar!");
echo "Atualizado com sucesso!";
header("Refresh: 3, editarFuncionario.php?idFuncionario=$idFuncionario");