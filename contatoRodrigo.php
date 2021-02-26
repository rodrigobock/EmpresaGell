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
        <div id="ContatoRodrigo">
            <div id="Contato">
                <form method="GET">
                    <br>
                    Nome Completo:<input type="text" name="nome" placeholder="Digite seu nome..."/>
                    <br>                  
                    <br>
                    E-mail:<input type="email" name="email" placeholder="exemplo@provedor.com"/>
                    <br>
                    <br>
                    Telefone:<input type="number" name="telefone" placeholder="(**)0000-0000"/>
                    <br>
                    <br>
                    Assunto:<input type="text" name="assunto" placeholder="Assunto a ser tratado..."/>
                    <br>
                    <br>
                    <div id="mensagem">
                        Mensagem: <textarea name="mensagem"></textarea>
                    </div>
                    <br>
                    <div id="enviarmensagem">
                        <input type="submit" name="contatar" value=" Enviar Mensagem "/>              
                    </div>
                    <br>
                </form>
            </div>
        </div>
        <?php
        include_once 'rodapeLucas.php';
        ?>
    </body>
</html>
