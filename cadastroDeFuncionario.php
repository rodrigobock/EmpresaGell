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
        <div id="cadastarFuncionario">
            <form action="cadastrarFuncionario.php" method="POST"> 
                <p>   Nome:<input type="text" name="nome"/></p>
                <br>
                <p> Salário:<input type="text" name="salario"/></p>
                <br>
                <p>Email:<input type="text" name="email"/></p>
                <br>
                <p>CPF:<input type="text" name="cpf"/></p>
                <br>
                <p>Telefone:<input type="text" name="telefone"/></p>
                <br>
                <p>Login:<input type="text" name="login"/></p>
                <br>
                <p>Senha:<input type="text" name="senha"/></p>
                <br>
                <input type="submit" name="cadastrar" value="Cadastrar Funcionário"/>
            </form>
        </div>
        <?php
        include_once './rodapeLucas.php';
        ?>
    </body>
</html>
