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
        <div id="MeioAvancado">
            <div id="ImagemComprar">
                <img src="Imagens/Avançado.jpg"/>
            </div>

            <div id="configAvan">
                <div id="tituloAvan">
                    <p>Computador Avançado </p>
                </div>
                <p> •Placa-mãe = Marca: Gigabyte;  Modelo: GA-X99-GAMING 5;  Soquete: LGA 2011 v3;  8 slots de memória; </p>
                <br>
                <p> •Processador = Marca: Intel;  Modelo: Core I7 Extreme; Frequência: 3.6 GHz; Núcleos: 4;  Canais de memória: 4 canais; </p>
                <br>
                <p> •Memória = Marca: HyperX; Frequência: 3000 MHz;  Quantidade: 4 pentes; </p>
                <br>
                <p> •HDD = Marca: WD;  Capacidade: 6 TB;</p>
                <br>
                <p> •SSD = Marca: Kingston; Capacidade: 960 GB; </p>
                <br>
                <p> •Placa de vídeo = Marca: Zotak; Alimentação: 900W;  Quantidade de memória: 12GB;</p> 
                <br>
                <p> •Fonte de alimentação = Marca: EVGA;  Modelo: 220-P2-1600-X1;  Certificação: 80 Plus Platinum;  Potência Real: 1600 W;</p>  
                <br>
                <p> •Gabinete = Marca: Corsair;</p>
                <br>
                <p> •Drive = Marca: LG;  Funções: Gravador Blu-ray; </p>
                <br>
                <p> •Teclado = Marca:Razer;</p>
                <br>
                <p> •Mouse = Marca: Mad Catz;</p>
                <br>
                <p> •Monitor = Marca: Asus;</p>
            </div>
            <div id="compra">
                <form action="cadastrarCompra.php" method="POST"> 
                    <input type="hidden" name="idProduto" value="3"/>
                    Quantidade: <input type="text" name="quantidade"/>
                    Preço: R$25000.00
                    <input type="hidden" name="preco" value="25000.00"/>
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
