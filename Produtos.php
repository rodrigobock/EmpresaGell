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
        <div id="produtos">
            <div id="compBasico">
                <div id="textBasic">
                    <p> Configuração Básica</p>
                </div>
                <div id="basico">
                    <a href="ComprarBasica.php" target="blank">
                        <img src="Imagens/Básico.jpg"/>
                    </a>
                </div>
            </div>
            <div id="compInterm">
                <div id="textInterm">
                    <p> Configuração Intermediária</p> 
                </div>
                <div id="intermediario">
                    <a href="ComprarIntermediario.php" target="blank">
                        <img src="Imagens/Intermediário.jpg"/>
                    </a>
                </div>
            </div>
            <div id="compAvan">
                <div id="textAvan">
                    <p> Configuração Avançada </p>
                </div>
                <div id="avancado">
                    <a href="ComprarAvancada.php" target="blank">
                        <img src="Imagens/Avançado.jpg"/>
                    </a>
                </div>
            </div>
        </div>
        <?php
        include_once 'rodapeLucas.php';
        ?>
    </body>
</html>
