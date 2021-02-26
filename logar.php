<?php
include_once './conexao.php';
include_once './sessao.php';

if (!isset($_POST["logar"])) {
    header("Location: login.php");
}
$login = $_POST["login"];
$senha = $_POST["senha"];
$sql1 = "SELECT * FROM Cliente WHERE (Login='$login' OR Email='$login') AND Senha='$senha';";
$consulta1 = mysqli_query($conexao, $sql1);
$temClienteLogado = mysqli_num_rows($consulta1);
if ($temClienteLogado > 0) {
    $resultado1 = mysqli_fetch_array($consulta1);
    $_SESSION["idCliente"] = $resultado1["idCliente"];
}
$sql2 = "SELECT * FROM Funcionario WHERE (Login='$login' OR Email='$login') AND Senha='$senha';";
$consulta2 = mysqli_query($conexao, $sql2);
$temFuncionarioLogado = mysqli_num_rows($consulta2);
if ($temFuncionarioLogado > 0) {
    $resultado2 = mysqli_fetch_array($consulta2);
    $_SESSION["idFuncionario"] = $resultado2["idFuncionario"];
}
if ($temClienteLogado > 0 || $temFuncionarioLogado > 0) {
    echo "Login efetuado com sucesso!";
    header("Refresh: 3, index.php");
} else {
    echo "Login e/ou senha incorretos!";
    header("Refresh: 3, login.php");
}

