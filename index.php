<?php
// include 'data.php';
require_once 'init.php';
?>
<!--
include e require chamam um arquivo de fora ou parte de código para o código atual
include - alerta e continua execução
require - se tiver erro, encerra a execução do código
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title><?php print $nomeLoja; ?></title>
</head>
<body>
    <?php
    require './partials/header.php';
    ?>
    <main>
        <section class="hero-zenit">
            <div class="hero-overlay"></div> <!-- Overlay = Sobreposição -->
            <div class="hero-content">
                <h1 class="hero-headline">Descubra o Ápice <br><span>do seu Setup</span></h1><!--titulo principal-->
                <p class="hero-tagline">Tecnologia de Alta Performance para Entusiastas</p>
                <a href="./productsPage.php" class="hero-button">COMPRE JÁ</a>
            </div>
        </section>
        <section id="products2">
            <div class="sectionTitle">
                <h2>Produtos - ZENIT</h2>
            </div>
            <!--organizei os produtos em classes específicas e utilizei variáveis no CSS ( "--nome:valor" e chamando com "var(--nome)" ) para definir as imagens de fundo em cada .productsBox, aplicando uma regra de hover no contêiner pai para disparar simultaneamente a troca de posição, a sombra e a troca pra a segunda imagem.-->
            <!-- quando cria/chama a classe com espaço no nome, são criadas/chamadas duas classes -->
            <div class="productsContainer">
                <a href="./productsPage.php#products" class="boxXdesc tecladoZenit"> <!--alterei pra tag <a> pra que seja clicavel e chame a pagina de compra-->
                    <div class="productsBox"></div>
                    <div class="productsDescription">
                        <p>Teclado Mecânico - Zenit</p>
                    </div>
                </a>
                <a href="./productsPage.php#products" class="boxXdesc mouseZenit">
                    <div class="productsBox"></div>
                    <div class="productsDescription">
                        <p>Mouse Gamer - Zenit</p>
                    </div>
                </a>
                <a href="./productsPage.php#products" class="boxXdesc lightbarZenit">
                    <div class="productsBox"></div>
                    <div class="productsDescription">
                        <p>Lightbar - Zenit</p>
                    </div>
                </a>
            </div>
            <div class="productsContainer">
                <a href="./productsPage.php#products" class="boxXdesc headsetZenit">
                    <div class="productsBox"></div>
                    <div class="productsDescription">
                        <p>Headset - Zenit</p>
                    </div>
                </a>
                <a href="./productsPage.php#products" class="boxXdesc hubZenit">
                    <div class="productsBox"></div>
                    <div class="productsDescription">
                        <p>Hub USB 10-em-1 - Zenit</p>
                    </div>
                </a>
                <a href="./productsPage.php#products" class="boxXdesc mousepadZenit">
                    <div class="productsBox"></div>
                    <div class="productsDescription">
                        <p>Mousepad - Zenit</p>
                    </div>
                </a>
            </div>
        </section>
        <section id="contact">
            <div class="contactForm">
                <div class="sectionTitle">
                    <h2>Contato</h2>
                </div>
                <form action="./processa-contato.php" method="get" target="_blank">
                    <div class="group">
                        <label for="nome">Nome Completo</label>
                        <input type="text" placeholder="Digite seu Nome Completo" id="nome" name="nome" required>
                    </div>
                    <div class="group">
                        <label for="emailForm">Email</label>
                        <input type="email" placeholder="Informe seu Email" id="emailForm" name="email" required>
                    </div>
                    <div class="group">
                        <label for="msgForm">mensagem</label>
                        <textarea id="msgForm" name="mensagem" maxlength="500" placeholder="Conte-nos um pouco sobre o que precisa..."></textarea>
                    </div>
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </section>
    </main>
    <?php
    require './partials/footer.php';
    ?>
</body>
</html>
