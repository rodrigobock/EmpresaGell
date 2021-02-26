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
        <style> 
            body{
                background-attachment: fixed;
                background-image: url(Imagens/natureza.jpg);
            }
            #topo{
                background-color:yellowgreen;
            }
            #textoLucas{
                background-color:yellowgreen;
            }
            #FotosLucas{
                background-color:yellowgreen;
            }
            #rodape{
                background-color:yellowgreen;
            }
        </style>
    </head>
    <body>
        <?php
        include_once 'topoLucas.php';
        ?>
        <div id="textoLucas">
            <p>“A Gell tem muita consciência sobre o descarte de materiais eletrônicos que já foram retirados de circulação. Sabemos que se tivermos o mero cuidado com uma coisa tão simples, aumentaremos drasticamente a melhoria de vida das pessoas. Usamos como exemplo os 3R’s: reduzir, reciclar e reutilizar. Reduzimos com uma quantia muito eficiente o desperdício e desprezo de material que acontece em algumas empresas; reciclamos o material que sobra para ,assim ,conseguirmos reutilizar e comercializar novamente esses produtos, acabando com a poluição em nosso planeta.”</p> 
            <p>Lucas Machado- Gell</p>
        </div>

        <div id="FotosLucas">
            <div id="TxtImg">
                <p>Imagens relacionadas com o descarte de material informatizado.</p>
                <div id="foto1">
                    <p></p>
                    <img src="Imagens/foto1.jpg"/>
                </div>
                <div id="foto2">
                    <p></p>
                    <img src="Imagens/foto2.jpg"/>
                </div>
            </div>
        </div>
        <?php
        include_once 'rodapeLucas.php';
        ?>
    </body>
</html>
