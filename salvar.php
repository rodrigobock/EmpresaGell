<?php

if (isset($_POST["enviar"])) {
    $nome = $_POST["nome"];
    $email = $_POST["e-mail"];
    $telefone = $_POST["telefone"];
    $curriculo = $_FILES["curriculo"]["name"];
    $diretorio = "Documentos/" . $documentos;
    if (move_uploaded_file($_FILES["curriculo"]["tmp_name"], $diretorio)) {
        include_once './conexao.php';
        $sql = "INSERT INTO post(Nome,Email,Telefone,Enviar Curriculo) VALUES ('$nome','$email','$telefone','$curriculo')";
        mysqli_query($conexao, $sql) or die("Erro ao enviar!");
        echo "Curriculo enviado com sucesso";
        header("Refresh: 1, index.php");
    }
}