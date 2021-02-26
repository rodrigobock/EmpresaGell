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
        include_once './topoLucas.php';
        ?>
        <div id="cadastrar">
            <form method="POST" action="cadastrar.php">
                <a>Identificação do Usuário</a> <br>
                <br>
                Nome:<input type="text" name="nome"/><br>
                <br>
                CPF:<input type="number" name="cpf"/><br>
                <br>
                Telefone:<input type="number" name="telefone"/><br>
                <br>
                E-mail:<input type="email" name="email"/><br>
                <br>
                <a>Localização do Usuário</a> <br>
                <br>
                Estado:<input type="text" name="estado"/><br>
                <br>
                Cidade:<input type="text" name="cidade"/><br>
                <br>
                Rua:<input type="text" name="rua"/><br>
                <br>
                Número:<input type="number" name="numero"/><br>
                <br>
                <a>Login e Senha</a> <br>
                <br>
                Login:<input type="text" name="login"/><br>
                <br>
                Senha:<input type="password" name="senha"/><br>
                <br>
                <input type="reset" value="Limpar os campos"/>
                <input type="submit" name="salvar" value="Cadastrar"/>
            </form>
            <br>
        </div>
        <?php
        include_once 'rodapeLucas.php';
        ?>
    </body>
</html>
