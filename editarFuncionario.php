<!DOCTYPE html>
<?php
include_once './conexao.php';
include_once './sessao.php';
?>
<html>
    <head>

        <?php
        include_once 'headLucas.php';
        ?>
    </head>
    <body>
        <?php
        include_once 'topoLucas.php';
        ?>
        <?php
        if (!isset($_GET["idFuncionario"])) {
            header("Location: index.php");
        }
        $idFuncionario = $_GET["idFuncionario"];
        $sql = "SELECT * FROM Funcionario WHERE idFuncionario = $idFuncionario;";
        $consulta = mysqli_query($conexao, $sql);
        $resultado = mysqli_fetch_array($consulta);
        $nome = $resultado["Nome"];
        $salario = $resultado["Salario"];
        $email = $resultado["Email"];
        $cpf = $resultado["CPF"];
        $telefone = $resultado["Telefone"];
        $login = $resultado["Login"];
        $senha = $resultado["Senha"];
        ?>
        <div id="editarFuncionario">
            <form action="atualizarFuncionario.php" method="POST">
                <input type="hidden" name="idFuncionario" value="<?php echo $idFuncionario; ?>"/>
                <p>Nome:<input type="text" name="nome" value="<?php echo $nome; ?>"/></p>
                <br>
                <p>Salário:<input type="text" name="salario" value="<?php echo $salario; ?>"/></p>
                <br>
                <p>Email:<input type="text" name="email" value="<?php echo $email; ?>"/></p>
                <br>
                <p> CPF:<input type="text" name="cpf" value="<?php echo $cpf; ?>"/></p>
                <br>
                <p> Telefone:<input type="text" name="telefone" value="<?php echo $telefone; ?>"/></p>
                <br>
                <p>Login:<input type="text" name="login" value="<?php echo $login; ?>"/></p>
                <br>
                <p>Senha:<input type="text" name="senha" value="<?php echo $senha; ?>"/></p>
                <br>
                <input type="submit" name="atualizar" value="Editar Funcionário"/>
            </form>
        </div>
        <?php
        include_once 'rodapeLucas.php';
        ?>
    </body>
</html>
