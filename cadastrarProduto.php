<?php

include_once './conexao.php';

if (!isset($_POST["cadastrar"])) {
    header("Location: index.php");
}

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];
$imagem = $_FILES["nome"]["name"];

$imagemSalva - "Imagens/" . $imagem;

if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $imagemSalva)) {
    mysqli_query($conexao, $sql) or die("Erro ao cadastrar o produto!");
    echo "Cadastrado com sucesso!";
    header("Refresh: 3, index.php");
}
