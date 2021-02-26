<?php

if (isset($_POST["salvar"])) {
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $estado = $_POST["estado"];
    $cidade = $_POST["cidade"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    include_once './cadastrocliente.php';

    $sql = "INSERT INTO pessoa VALUES (NULL,'$nome','$cpf','$telefone','$email','$estado','$cidade','$rua','$numero','$login','$senha')";
    mysqli_query($cadastrocliente, $sql) or die("Erro ao cadastrar");
    echo "<script>alert('Cadastrado com sucesso!');</script>";
    header("Refresh: 2, index.php");
}