<?php
require_once 'init.php';
// include 'data.php';
// print '<pre>';
// print_r($categorias); // print_r Imprime um array
// print_r($produtos_base);
// print '</pre>'

$categoria_get = isset($_GET['categoria']) ? trim ($_GET['categoria']) : '';
// if (isset($_GET['categoria'])){
//     print $_GET['categoria'];
// };
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
                echo '<li><a href="./productsPage.php">Todos</a></li>';
                foreach($categorias as $kcat => $nome){
                    // kcat = key categoria | vcat = value categoria (ou nome)
                    echo '<li><a href="./productsPage.php?categoria='.$kcat.'">'.$nome.'</a></li>';
                }
                echo '</ul>';
                echo '</nav>';
                
            ?>
            
            <!--organizei os produtos em classes específicas e utilizei variáveis no CSS ( "--nome:valor" e chamando com "var(--nome)" ) para definir as imagens de fundo em cada .productsBox, aplicando uma regra de hover no contêiner pai para disparar simultaneamente a troca de posição, a sombra e a troca pra a segunda imagem.-->
            <!-- quando cria/chama a classe com espaço no nome, são criadas/chamadas duas classes -->
            <div class="productsContainer">
                <?php
                foreach($_SESSION['produtos'] as $produto) {
                    if ($categoria_get == '' || $produto['categoria'] == $categoria_get) {
                    echo 
                    '<a href="./descricaoProduto.php" class="boxXdesc tecladoZenit"> <!--alterei pra tag <a> pra que seja clicavel e chame a pagina de compra-->
                    <div class="productsBox"></div>
                    <div class="productsDescription">
                        <p>'.$produto['nome'].' | R$'.$produto['preco'].'</p>
                        <p class="card_categoria">'.$produto['categoria'].'</p>
                    </div>
                    </a>';
                    }
                }


                // <p class="paragrafo"> Cubos, e Muito Mais!! </p>
                // echo '<div class="grid2">';
                // foreach($_SESSION['produtos'] as $produto){
                //     if($_GET['categoria'] == '' || $produto['categoria'] == $_GET['categoria'] ){
                //     echo '<div class="item"><img src="'.$produto['imagem'].'" class="img" id="produtos"><p class="legend" >'.$produto['nome'].' <br> Preço: <R1>'.$produto['preco'].' </R1> Categoria: '.$produto['categoria'].' <button class="button"onclick=pagina('.$produto['page'].')>Comprar</button></p></div>';
                // }};
                // echo '</div>';

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