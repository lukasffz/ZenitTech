<?php
include 'data.php';
// print '<pre>';
// print_r($categorias); // print_r Imprime um array
// print_r($produtos_base);
// print '</pre>'
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
            <!-- <nav class="navbar" aria-label="Categorias">
                <ul>
                    <li><a href="#cat-todos">Todos</a></li>
                    <li><a href="#cat-cFio">Com Fio</a></li>
                    <li><a href="#cat-sFio">Sem Fio</a></li>
                </ul> 
            </nav> -->
            <?php
                echo '<nav class="navbar" aria-label="Categorias">';
                echo '<ul>';
                echo '<li><a href="#cat-todos">Todos</a></li>';
                foreach($categorias as $kcat => $nome){
                    // kcat = key categoria | vcat = value categoria (ou nome)
                    echo '<li><a href="#cat-'.$kcat.'">'.$nome.'</a></li>';
                }
                echo '</ul>';
                echo '</nav>';
            ?>
            <!--organizei os produtos em classes específicas e utilizei variáveis no CSS ( "--nome:valor" e chamando com "var(--nome)" ) para definir as imagens de fundo em cada .productsBox, aplicando uma regra de hover no contêiner pai para disparar simultaneamente a troca de posição, a sombra e a troca pra a segunda imagem.-->
            <!-- quando cria/chama a classe com espaço no nome, são criadas/chamadas duas classes -->
            <div class="productsContainer">
                <?php
                foreach($produtos_base as $produto){
                    echo 
                    '<a href="./descricaoProduto.php" class="boxXdesc tecladoZenit"> <!--alterei pra tag <a> pra que seja clicavel e chame a pagina de compra-->
                    <div class="productsBox"></div>
                    <div class="productsDescription">
                        <p>'.$produto['nome'].' | R$'.$produto['preco'].'</p>
                        <p class="card_categoria">'.$produto['categoria'].'</p>
                    </div>
                    </a>';
                }
                ?>
                <!-- <a href="./descricaoProduto.php" class="boxXdesc tecladoZenit"> 
                    <div class="productsBox"></div>
                    <div class="productsDescription">
                        <p>Teclado Mecânico - Zenit | R$259.99</p>
                    </div>
                </a>
                <a href="./descricaoProduto.html" class="boxXdesc mouseZenit">
                    <div class="productsBox"></div>
                    <div class="productsDescription">
                        <p>Mouse Gamer - Zenit | R$159.99</p>
                    </div>
                </a>
                <a href="./descricaoProduto.php" class="boxXdesc lightbarZenit">
                    <div class="productsBox"></div>
                    <div class="productsDescription">
                        <p>Lightbar - Zenit | R$49.99</p>
                    </div>
                </a> -->
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