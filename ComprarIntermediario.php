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
        <div id="meioIntermediaria">
            <div id="ImagemComprar">
                <img src="Imagens/Intermediário.jpg"/>
            </div>
            <div id="configInterm">
                <div id="tituloInterm">
                    <p> Computador Intermediário </p>
                </div>
                <p> •Placa-mãe = Marca: Asus;  Modelo: X-97M Plus;  Soquete: LGA 1150;  4 slots de memória; </p>
                <br>
                <p> •Processador = Marca: Intel;  Modelo: Core I5 4690</p>
                <br>
                <p>Frequência: 3.5 GHz; Núcleos: 4 ;  Canais de memória: 2 canais; </p>
                <br>
                <p> •Memória = Marca: Kingston; Frequência: 1600 MHz;  Quantidade: 4 pente; </p>
                <br>
                <p> •HDD = Marca: Seagate; Capacidade: 1 TB; </p>
                <br>
                <p> •Placa de vídeo = Marca: PNY; Alimentação: 550W;  Quantidade de memória: 2GB;</p> 
                <br>
                <p> •Fonte de alimentação = Marca: Corsair; Certificação: 80 PLUS Bronze;  Potência Real: 600W;</p>  
                <br>
                <p> •Gabinete = Marca: Cougar;</p>
                <br>
                <p> •Drive = Marca: LG;  Funções: Bluray; </p>
                <br>
                <p> •Teclado = Marca:Multilaser ;  </p>
                <br>
                <p> •Mouse = Marca: A4 tech;  </p>
                <br>
                <p> •Monitor = Marca: LG; </p>
            </div>
            <div id="compra">
                <form action="cadastrarCompra.php" method="POST"> 
                    <input type="hidden" name="idProduto" value="1"/>
                    Quantidade: <input type="text" name="quantidade"/>
                    Preço: R$5800.00
                    <input type="hidden" name="preco" value="5800.00"/>
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
