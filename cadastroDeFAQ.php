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
       <div id="meioCadastroFAQ">
       <div id="cadastroFAQescrita">
           <p>Cadastro de Perguntas Frequentes...</p>
       </div>
           <br>
       <div id="cadastroFAQ">
       <form action="cadastrarFAQ.php" method="POST">
           <div id="perguntaFAQ">
           Pergunta:<input type="text" name="pergunta"/>
           </div>
           <br>
           <div id="respostaFAQ">
           Resposta:<textarea name="resposta"></textarea>
           </div>
           <br>
           <input type="submit" name="cadastrar" value="Cadastrar Pergunta"/>
       </form>
       </div>
       </div>
        <?php
       include_once './rodapeLucas.php';
       ?>
   </body>
</html>
