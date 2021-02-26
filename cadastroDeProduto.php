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
        <div id="cadastrarProduto">
            <form action="cadastrarProduto.php" method="POST">
                <p> Nome:<input type="text" name="nome"/></p>
                <br>
                <p>Descrição:<textarea name="descricao"></textarea></p>
                <br>
                <p>Preço:<input type="text" name="preco"/></p>
                <br>
                <p> Quantidade:<input type="text" name="quantidade"/></p>
                <br>
                <p> Imagem:<input type="file" name="imagem"/></p>
                <br>
                <input type="submit" name="cadastrar" value="Cadastrar Produto"/>
            </form>
        </div>
        <?php
        include_once 'rodapeLucas.php';
        ?>
    </body>
</html>
