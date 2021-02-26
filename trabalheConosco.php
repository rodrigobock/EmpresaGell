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
        <div id="trabalheConosco">
            <form method="POST" action="salvar.php" enctype="multipart/form-data">
                <br>
                <div id="nome">
                    Nome:<input type="text" name="nome" placeholder="Insira seu nome..."/>
                </div> 
                <br>
                <br>
                <div id="email">
                    E-mail:<input type="email" name="e-mail" placeholder="Ensira seu e-mail..."/>
                </div> 
                <br>
                <br>
                <div id="telefone">
                    Telefone:<input type="number" name="telefone" placeholder="Ensira seu telefone"/>
                </div> 
                <br>
                <br>
                <div id="curriculo">
                    Adicionar curriculo:<input type="file" name="curriculo"/>
                </div>  
                <br>    
                <br>
                <div id="enviar">    
                    <input type="submit" name="enviar" value="Enviar"/>           
                    <input type="reset" value="Limpar os campos"/>   
                </div>
                <br>
                <br>
            </form>
        </div>
        <?php
        include_once 'rodapeLucas.php';
        ?>
    </body>
</html>
