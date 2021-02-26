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
        <div id="escolha">
            <ul>
                <p>Você gostaria de se cadastrar como?</p>
                <br>
                <li><a href="cadastroDeCliente.php">Cliente</a></li>
                <br>
                <li><a href="cadastroDeFuncionario.php">Funcionário</a></li>
            </ul>
        </div>
        <?php
        include_once './rodapeLucas.php';
        ?>
    </body>
</html>
