<?php 
include 'data.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descrição Produto - <?php print $nomeLoja ?></title>
    <link rel="stylesheet" href="./styles/styleDescricao.css">
</head>
    <body>
        <?php
        require './partials/header.php';
        ?>
        <main>
            <div class="container">
                <div class="IMAGENS_DESC">
                    <div class="IMAGENS">
                        <div class="img1"></div>
                        <div class="img2"></div>
                    </div>
                    <div class="descricaoProduct">
                        <h1 class="desc"> TECLADO MECÂNICO - ZENIT TECH </h1>
                        <h3> <br>R$259,99<br>
                            <br>
                            4 x de R$65,00 sem juros <br>
                            Frete grátis a partir de R$300,00 <br>
                        </h3>
                        <button>COMPRAR</button>
                        <p>
                            <span style="font-size: 18px;">Apresentamos o novo Teclado Mecânico da <span style="color: #ff0000;">Zenit Tech</span>.</span> <br>
                            <br>
                            O Teclado utiliza switches mecânicos (Vermelho, Azul, Marrom), podendo se adequar ao padrão de qualquer Gamer! É produzido com material de mais alta qualidade. <br>
                            Esse Teclado pode também ser customizado de acordo com o gosto do comprador, basta entrar em contato com a nossa equipe ao realizar a compra. <br> <br>
                            <br>
                            <span style="font-size: 18px;">Detalhes do Teclado</span><br>
                            <br>
                            • Switches Mecânicos <br>
                            • RGB Customizável <br>
                            • Drivers em nosso site (Apenas para compradores) <br>
                            • Modelos 100% | 75% | 60% <br>
                            <br>
                            <br>
                            <span style="font-size: 18px;">Sobre a modelagem</span><br>
                            <br>
                            O Modelo 100% consta com todas as teclas, se adequando perfeitamente para quem também trabalha e precisa de teclas específicas. <br>
                            <br>
                            O Modelo 75% está no intermediário entre o 100% e o 60%, sendo considerado um modelo para adaptação e ótimo para quem quer mudar!<br>
                            <br>
                            O Modelo 60% é focado para Gamers, sendo um teclado que ocupa menos espaço e mais intuitivo.<br>
                            <br>
                            <br>    
                            <span style="font-size: 18px;">Experiência <span style="color: #ff0000;">Zenit Tech</span></span><br>
                            <br>
                            Todos os produtos da <span style="color: #ff0000;">Zenit Tech</span> são embalados individualmente em nossas caixinhas colecionáveis e acompanham mimos especiais.
                        </p>
                    </div>
                </div>
            </div>
        </main>
        <?php
        require './partials/footer.php';
        ?>
    </body>
</html>