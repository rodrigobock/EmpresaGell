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
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
    $(function() {
        $("#accordion").accordion();
    });
</script>
</head>
<body>

    <div id="accordion">
        <h3>O computador não reconhece o driver de CD/DVD o que posso fazer?</h3>
        <div>
            <p>
                Desligue o computador e aguarde cerca de cinco segundos.
                Ligue o computador e pressione imediatamente a tecla F10 até que a tela  BIOS seja exibida.
                Se o BIOS não abrir com o uso da tecla F10, tente usando F1.
                Use as teclas de seta para navegar até a tela System Configuration (Configuração do sistema).
                Selecione Boot Options (Opções de inicialização) e pressione Enter. 
                Na subtela Boot Options, selecione Boot Order (Ordem de inicialização) e pressione Enter.
                Na lista Boot Order (ordem de inicialização), procure a entrada da unidade de CD/DVD.
                Dependendo do modelo do notebook e da unidade específica de CD/DVD-ROM, 
                o nome da entrada indica exatamente o tipo de unidade de disco que você possui.
                (por exemplo, é possível que seja exibido Internal CD/DVD-ROM Drive).
                Depois de pronto aperte ESC e ENTER.
            </p>
        </div>
        <h3>Problema: O monitor não exibe imagens após a inicialização do computador.</h3>
        <div>
            <p>
                Veja se o monitor mostra alguma luz quando se apertas o botão liga/desliga.
                Se a luz no monitor continuar apagada, o monitor não está recebendo energia da tomada ou do adaptador.
                Caso você tenha um monitor CD de tela plana, desconecte o respectivo cabo de alimentação, aguarde por uns 30 segundos, reconecte o cabo e ligue o monitor.
                Se o monitor tiver um cabo removível, pegue outro cabo para fazer testes e identificar se o anterior está danificado.
                Desconecte todos os dispositivos exceto mouse, teclado e monitor. Isso inclui a remoção de pen drives.
                Conecte outro monitor ao computador para ver qual dispositivo está com o problema (o monitor ou o computador). 
                Caso não tenha um monitor extra, conecte o computador ao monitor de um amigo para efetuar a solução de problemas.
                Quando o monitor estiver conectado, ligue o computador e o monitor. O que aconteceu? 
                Se o outro monitor conectado não exibir nada, desconecte o cabo e verifique a qualidade deles.
                Se o novo monitor funcionar bem, o monitor original ou seus cabos estão com problema.
                Faça o seguinte:
                Substitua o cabo de alimentação do monitor.
                Ligue o monitor. Se o monitor exibir imagens, o problema esta resolvido. Se o monitor continuar sem imagem, prossiga com estas instruções.
                Substitua o cabo de vídeo.
                Ligue o monitor. Se o monitor exibir imagens, o problema esta resolvido. Se o monitor continuar sem imagem, prossiga com estas instruções.
                Se o monitor não funcionar após a substituição dos cabos, substitua-o ou leve-o à assistência técnica.
                Caso o problema for os conectores tente endireitar os pinos amassados com um pequeno tubo de metal, como a ponta vazia de uma lapiseira ou a ponta de uma caneta de ponta retrátil.
                Se mesmo assim não aparecer imagem na tela possivelmente o problema é na placa de video, então leve o gabinete a  uma assistência técnica para verificar o que esta acontecendo.
            </p>
        </div>
        <h3>Pergunta: Meu computador não liga o que posso fazer?</h3>
        <div>
            <p>
                Certifique-se de que o cabo de alimentação ou o adaptador AC estão conectados ao computador e que a conexão está firme e não solta.
                Para notebooks, verifique se o cabo de alimentação está completamente conectado a entrada AC.
                Se o cabo de alimentação ou o adaptador AC estiver conectado a um estabilizador, verifique se o estabilizador está ligado.
                Tente uma tomada diferente.
                Para desktops, verifique a voltagem da fonte de alimentação (adaptadores AC são de comutação automática).
            </p>
        </div>
        <h3>Meu notebook não sai som o que faço para resolver?</h3>
        <div>
            <p>
                É bem provável que o problema seja no balanço de volume então siga esse passo a passo para tentar “consertar” o problema:
                Clique com o botão esquerdo do mouse no ícone do alto-falante na Barra de Tarefas e depois clique em Mixer.
                Na janela Mixer de volume, clique no ícone do alto-falante.
                Na janela de Propriedades do alto-falante, clique na guia Níveis.
                Abaixo da opção de saída Realtek HD Áudio, clique no botão Balance.
                Tenha sertesa que o controle deslizante do som do canal esquerdo esteja configurado para um volume com o qual você se sinta confortável.
            </p>
        </div>
        <h3>Como eu limpo o histórico de navegação do meu navegador?</h3>
        <div>
            <p>
                Abra o seu navegador de internet e aperte as teclas ctrl + H e clique na opção 
                “Limpar dados de navegação” ou “Excluir histórico de pesquisa”,
                depois determine desde que tempo de navegação você gostaria de apagar os dados.
            </p>
        </div>
        <h3>Meu computador está com vírus, o que fazer?</h3>
        <div>
            <p>
                Primeiro baixe um antivírus de confiança.
                Depois que você baixou ele execute-o pela primeira vez se informar que tem algum vírus no computador vá em “Limpar ou Excluir vírus “ também existe a opção de move-lô para a quarentena.
                Em casos estremos você pode pegar e formatar o seu PC ou manda-lo para um profissional da area.
            </p>
        </div>
        <h3>Verificar se há atualizações:</h3>
        <div>
            <p>
                Vá em “iniciar”; 
                Na caixa de pesquisa digite “Update”; 
                Clique um “Windows Update”; 
                Depois clique em “Verificar se há atualizações”; 
                Se tiver atualizações pendentes clique em “Instalar Atualizações”.
            </p>

        </div>
        <h3>Meu computador esta superaquecido.</h3>
        <div>
            <p>
                O superaquecimento pode fazer sua máquina apagar assim, em um estalar de dedos.Se seus componentes ultrapassam os 55 ºC, fique atento: talvez esteja na hora de limpar ou até mesmo trocar seu cooler e dissipador. Resfriar seu computador com  um watercooler também é uma ótima ideia.
            </p>

        </div>
        <h3>Estou com problema no meu mouse</h3>
        <div>
            <p>
                A conexão USB pode estar solta. Tente desconectar o mouse e conectá-lo novamente ou conecte o mouse a uma porta USB diferente.
    Se seu mouse estiver conectado a um USB ou caixa de comutação de USB, tente removê-lo e conectá-lo ao computador.
    Desconecte outros dispositivos USB que não estejam em uso.
    Tente usar o mouse em outro computador para garantir que não tem defeito.
            </p>

        </div>
        <h3>Meu teclado está com problema nos acentos</h3>
        <div>
            <p>
                Para corrigir estes erros é preciso configurar o Windows(Caso este for seu sistema operacional) para o padrão brasileiro. Assim, você deve acessar o painel de controle de sua máquina, clicar nas configurações de teclado e selecionar o idioma português. Ou então clicar na sigla EN do lado do horário e colocar em PT.
            </p>
        </div>
        <h3>Desliguei meu computador direto no botão pode causar algo?</h3>
        <div>
            <p>
                Desligar a máquina diretamente no botão, sem selecionar previamente a opção de desligar o equipamento, estraga o HD. O HD pode queimar ao ser desligado enquanto ele ainda está lendo ou escrevendo em alguma parte do sistema. Quando a energia é desligada subitamente, as placas que cobrem o disco (que gira até 10 mil rotações) descem sobre ele e podem ir riscando até que alcancem a posição de descanso. Ao selecionar a opção 'Desligar o Computador', todo o sistema se prepara para repousar e suspende todas as atividades. Cada peça vai ficar em seu devido lugar.
            </p>

        </div>
    </div>

    <?php
    include_once 'rodapeLucas.php';
    ?>
</body>
</html>
