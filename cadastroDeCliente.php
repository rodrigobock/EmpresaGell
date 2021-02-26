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
        <form action="cadastrarCliente.php" method="POST">
            <div id="CadastroCliente">
                <p>Nome:<input type="text" name="nome"/></p>
                <br>
                <p>Email:<input type="email" name="email"/></p>
                <br>
                <p>CPF:<input type="text" name="cpf"/></p> 
                <br>
                <p>Telefone:<input type="number" name="telefone"/></p>
                <br>
                <p>Rua:<input type="text" name="rua"/></p>
                <br>
                <p>Login:<input type="text" name="login"/></p> 
                <br>
                <p>Senha:<input type="password" name="senha"/></p>
                <br>
                <input type="submit" name="cadastrar" value="Cadastrar Cliente"/>
            </div>
        </form>
        <?php
        include_once './rodapeLucas.php';
        ?>
    </body>
</html>

