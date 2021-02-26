<?php

include_once './conexao.php';

if (!isset($_POST["atualizar"])) {
    header("Location: index.php");
}

$idCliente = $_POST["idCliente"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];
$login = $_POST["login"];
$senha = $_POST["senha"];
$endereco = $_POST["endereco"];

$sql = "UPDATE Cliente SET Nome='$nome', Email='$email', CPF='$cpf', Telefone='$telefone', Login= '$login', Senha= '$senha', Endereco='$endereco' WHERE idCliente=$idCliente";
mysqli_query($conexao, $sql) or die("Erro ao atualizar!");
echo "Atualizado com sucesso!";
header("Refresh: 3, editarCliente.php?idCliente=$idCliente");
?>


