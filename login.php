<!DOCTYPE html>
<?php
include_once './conexao.php';
include_once './sessao.php';
?>
<html>
    <head>
        <?php
        include_once './headLucas.php';
        ?>
    </head>
    <body>
        <?php
        include_once './topoLucas.php';
        ?>
        <?php
        if (isset($_SESSION["idCliente"]) || isset($_SESSION["idFuncionario"])) {
            if (isset($_SESSION["idCliente"])) {
                $idCliente = $_SESSION["idCliente"];
                $sql = "SELECT * FROM Cliente WHERE idCliente = $idCliente;";
                $consulta = mysqli_query($conexao, $sql);
                $resultado = mysqli_fetch_array($consulta);
                $nome = $resultado["Nome"];
                ?>
                <div id="editarDados">
                    <ul>
                        <li>
                            <a href="editarCliente.php?idCliente=<?php echo $idCliente; ?>">Editar meus dados</a>
                            <?php
                        } else {
                            $idFuncionario = $_SESSION["idFuncionario"];
                            $sql = "SELECT * FROM Funcionario WHERE idFuncionario = $idFuncionario;";
                            $consulta = mysqli_query($conexao, $sql);
                            $resultado = mysqli_fetch_array($consulta);
                            $nome = $resultado["Nome"];
                            ?>
                            <div id="menuFuncionario">
                                <ul>
                                    <li>
                                        <a href="cadastroDeProduto.php">Cadastrar Produtos</a>
                                        <a href="cadastrarFAQ.php">Cadastrar Perguntas</a>
                                        <a href="cadastrarFuncionario.php">Cadastrar Funcionários</a>                          
                                        <a href="editarFuncionario.php?idFuncionario=<?php echo $idFuncionario; ?>">Editar meus dados</a> 
                                    </li>
                                </ul>
                            </div>
                            <?php
                        }
                        ?>
                    </li>
                </ul>
            </div>
            <br>
            <div id="comprimentos">
                Olá,<?php echo $nome; ?>, seja bem vindo a GELL!<br>
            </div>
            <br>
            <div id="logoff">
                <ul>
                    <li>
                        <a href="logout.php">Logoff</a>
                    </li>
                </ul>
            </div>
            <br>
            <?php
        } else {
            ?>
            <div id="login">
                <form action="logar.php" method="POST">
                    <br>
                    Login:<input type="text" name="login" placeholder="Digite seu login..."/>
                    <br>
                    <br>
                    Senha:<input type="password" name="senha"/>
                    <br>
                    <br>
                    <div id="efetuarlogin">
                        <input type="submit" name="logar" value=""/>
                    </div>
                    <br>
                    <br>
                </form>
            </div>
            <?php
        }
        ?>



        <?php
        include_once './rodapeLucas.php';
        ?>
    </body>
</html>

