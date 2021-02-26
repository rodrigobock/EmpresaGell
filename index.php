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
        include_once 'topoLucas.php';
        ?>
        <div id="meio">
            <?php
            include_once 'menuEsquerdaLucas.php';
            ?>

            <div id="slider">
                <div id="slideshow-wrap">
                    <input type="radio" id="button-1" name="controls" checked="checked"/>
                    <label for="button-1"></label>
                    <input type="radio" id="button-2" name="controls"/>
                    <label for="button-2"></label>
                    <input type="radio" id="button-3" name="controls"/>
                    <label for="button-3"></label>
                    <input type="radio" id="button-4" name="controls"/>
                    <label for="button-4"></label>
                    <input type="radio" id="button-5" name="controls"/>
                    <label for="button-5"></label>
                    <label for="button-1" class="arrows" id="arrow-1">></label>
                    <label for="button-2" class="arrows" id="arrow-2">></label>
                    <label for="button-3" class="arrows" id="arrow-3">></label>
                    <label for="button-4" class="arrows" id="arrow-4">></label>
                    <label for="button-5" class="arrows" id="arrow-5">></label>
                    <div id="slideshow-inner">
                        <ul>
                            <li id="slide1">
                                <img src="Imagens/maxresdefault.jpg" />
                                <div class="description">
                                    <input type="checkbox" id="show-description-1"/>
                                    <label for="show-description-1" class="show-description-label">I</label>
                                    <div class="description-text">
                                        <h2>Flower power</h2>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                                    </div>
                                </div>
                            </li>
                            <li id="slide2">
                                <img src="Imagens/computadores.jpg" />
                                <div class="description">
                                    <input type="checkbox" id="show-description-2"/>
                                    <label for="show-description-2" class="show-description-label">I</label>
                                    <div class="description-text">
                                    </div>
                                </div>
                            </li>
                            <li id="slide3">
                                <img src="Imagens/imagem3.jpg" />
                                <div class="description">
                                    <input type="checkbox" id="show-description-3"/>
                                    <label for="show-description-3" class="show-description-label">I</label>
                                    <div class="description-text">
                                    </div>
                                </div>
                            </li>
                            <li id="slide4">
                                <img src="Imagens/imagem2.jpg" />
                                <div class="description">
                                    <input type="checkbox" id="show-description-4"/>
                                    <label for="show-description-4" class="show-description-label">I</label>
                                    <div class="description-text">                                    
                                    </div>
                                </div>
                            </li>
                            <li id="slide5">
                                <img src="Imagens/imagem1.jpg" />
                                <div class="description">
                                    <input type="checkbox" id="show-description-5"/>
                                    <label for="show-description-5" class="show-description-label">I</label>
                                    <div class="description-text">             
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <?php
            include_once 'menuDireitaLucas.php';
            ?>
        </div>
        <?php
        include_once 'rodapeLucas.php';
        ?>
    </div>
</body>
</html>
