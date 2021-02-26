<?php

include_once './conexao.php';
include_once './sessao.php';

if (!isset($_POST["cadastrar"]) || !isset($_SESSION["idCliente"])) {
    header("Location: index.php");
}

$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];
$formaPagamento = $_POST["forma"];
$valorTotal = $preco * $quantidade;
$idProduto = $_POST["idProduto"];
$idCliente = $_SESSION["idCliente"];

$sql = "INSERT INTO Compra_Venda VALUES (NULL, $idCliente, $idProduto, $valorTotal, '$formaPagamento')";
mysqli_query($conexao, $sql) or die("Erro ao cadastrar a compra!");
echo "Compra efetuada com sucesso!";
header("Refresh: 3, index.php");
