<?php
include 'data.php'
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styleProducts.css">
    <title>Produtos - <?php print $nomeLoja ?></title>
</head>
<body>
    <?php
    require './partials/header.php';
    ?>
    <main>
        <section id="products">
            <div class="sectionTitle">
                <h2>Produtos</h2>
            </div>
            <!--organizei os produtos em classes específicas e utilizei variáveis no CSS ( "--nome:valor" e chamando com "var(--nome)" ) para definir as imagens de fundo em cada .productsBox, aplicando uma regra de hover no contêiner pai para disparar simultaneamente a troca de posição, a sombra e a troca pra a segunda imagem.-->
            <!-- quando cria/chama a classe com espaço no nome, são criadas/chamadas duas classes -->
            <div class="productsContainer">
                <a href="./descricaoProduto.php" class="boxXdesc tecladoZenit"> <!--alterei pra tag <a> pra que seja clicavel e chame a pagina de compra-->
                    <div class="productsBox"></div>
                    <div class="productsDescription">
                        <p>Teclado Mecânico - Zenit | R$15.99</p>
                    </div>
                </a>
                <a href="./descricaoProduto.html" class="boxXdesc mouseZenit">
                    <div class="productsBox"></div>
                    <div class="productsDescription">
                        <p>Mouse Gamer - Zenit | R$15.99</p>
                    </div>
                </a>
                <a href="./descricaoProduto.php" class="boxXdesc lightbarZenit">
                    <div class="productsBox"></div>
                    <div class="productsDescription">
                        <p>Lightbar - Zenit | R$15.99</p>
                    </div>
                </a>
            </div>
            <div class="productsContainer">
                <a href="./descricaoProduto.php" class="boxXdesc headsetZenit">
                    <div class="productsBox"></div>
                    <div class="productsDescription">
                        <p>Headset - Zenit | R$15.99</p>
                    </div>
                </a>
                <a href="./descricaoProduto.php" class="boxXdesc hubZenit">
                    <div class="productsBox"></div>
                    <div class="productsDescription">
                        <p>Hub USB 10-em-1 - Zenit | R$15.99</p>
                    </div>
                </a>
                <a href="./descricaoProduto.html" class="boxXdesc mousepadZenit">
                    <div class="productsBox"></div>
                    <div class="productsDescription">
                        <p>Mousepad - Zenit | R$15.99</p>
                    </div>
                </a>
            </div>
        </section>
        <section id="products2">
            <div class="sectionTitle">
                <h2>Produtos - ZENIT</h2>
            </div>
            <div class="productsContainer">
                <a href="./descricaoProduto.php" class="boxXdesc tecladoZenit">
                    <div class="productsBox"></div>
                    <div class="productsDescription">
                        <p>Teclado Mecânico - Zenit | R$15.99</p>
                    </div>
                </a>
                <a href="./descricaoProduto.php" class="boxXdesc mouseZenit">
                    <div class="productsBox"></div>
                    <div class="productsDescription">
                        <p>Mouse Gamer - Zenit | R$15.99</p>
                    </div>
                </a>
                <a href="./descricaoProduto.php" class="boxXdesc lightbarZenit">
                    <div class="productsBox"></div>
                    <div class="productsDescription">
                        <p>Lightbar - Zenit | R$15.99</p>
                    </div>
                </a>
            </div>
            <div class="productsContainer">
                <a href="./descricaoProduto.php" class="boxXdesc headsetZenit">
                    <div class="productsBox"></div>
                    <div class="productsDescription">
                        <p>Headset - Zenit | R$15.99</p>
                    </div>
                </a>
                <a href="./descricaoProduto.php" class="boxXdesc hubZenit">
                    <div class="productsBox"></div>
                    <div class="productsDescription">
                        <p>Hub USB 10-em-1 - Zenit | R$15.99</p>
                    </div>
                </a>
                <a href="./descricaoProduto.php" class="boxXdesc mousepadZenit">
                    <div class="productsBox"></div>
                    <div class="productsDescription">
                        <p>Mousepad - Zenit | R$15.99</p>
                    </div>
                </a>
            </div>
        </section>
    </main>
    <?php
    require './partials/footer.php';
    ?>
</body>
</html>