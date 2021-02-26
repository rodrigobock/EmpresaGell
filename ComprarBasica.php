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
        <div id="meioComprar">
            <div id="ImagemComprar">
                <img src="Imagens/Básico.jpg"/>
                <div id="comprar">
                </div>
            </div>
            <div id="configBasico">
                <div id="tituloBasic">
                    <p> Computador Básico </p>
                </div>
                <p> •Placa-mãe = Marca: MSI;  Modelo: Z87M;  Soquete: LGA 1150;  4 slots de memória; </p>
                <br>
                <p> •Processador = Marca: Intel;  Modelo: Core i3-4370 Processor;</p>
                <br>
                <p>Frequência: 3.8 GHz; Núcleos: 2;  Canais de memória: 2 canais; </p>
                <br>
                <p> •Memória = Marca: Kingston; Frequência: 2400 MHz;  Quantidade: 1 pente; </p>
                <br>
                <p> •HDD = Marca: Seagate; Capacidade: 1 TB; </p>
                <br>
                <p> •Placa de vídeo = Marca: XFX; Alimentação: 228W;  Quantidade de memória: 1GB;</p> 
                <br>
                <p> •Fonte de alimentação = Marca: EVGA;  Modelo: EVGA 500W;  Certificação: 80 PLUS;  Potência Real: 500W;</p>  
                <br>
                <p> •Gabinete = Marca: Cougar; </p>
                <br>
                <p> •Drive = Marca: LG;  Funções: CD e DVD; </p>
                <br>
                <p> •Teclado = Marca: Microsoft;</p>
                <br>
                <p> •Mouse = Marca: Microsoft; </p>
                <br>
                <p> •Teclado = Marca: Microsoft; </p>
                <br>
                <p> •Monitor = Marca: LG; </p>
            </div>
            <div id="compra">
                <form action="cadastrarCompra.php" method="POST"> 
                    <input type="hidden" name="idProduto" value="1"/>
                    Quantidade: <input type="text" name="quantidade"/>
                    Preço: R$2500.00
                    <input type="hidden" name="preco" value="2500.00"/>
                    <select name="forma">
                        <option value="À Vista" selected>À Vista</option>
                        <option value="2x Sem Juros" selected>2x Sem juros</option>
                        <option value="3x Sem Juros" selected>3x Sem juros</option>
                    </select>
                    <?php
                    if (!isset($_SESSION["idCliente"])) {
                        ?>
                        Você precisa estar logado em nosso site para poder executar esta compra! <a href="login.php">Clique aqui para logar</a>
                        <?php
                    } else {
                        ?>
                        <input type="submit" name="cadastrar" value="Comprar">
                        <?php
                    }
                    ?>
                </form>
            </div>
        </div>
        <?php
        include_once 'rodapeLucas.php';
        ?>
    </body>
</html>
