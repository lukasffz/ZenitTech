<?php
# Declaração de variáveis
$nomeLoja = "Zenit Tech";
$zenit = "Zenit";
$tech = "Tech";
$navProducts = "Produtos";
$navZenit = "Zenit";
$navContact = "Contato";

$categorias = [
    'cFio' => 'Com Fio',
    'sFio' => 'Sem Fio'
];

$produtos_base = [
    [
        'id' => 1,
        'nome' => 'Teclado Mecânico - Zenit',
        'preco' => 259.99,
        'categoria' => 'sFio',
        'descricao_curta' => 'Teclado da mecânico oficial da Zenit',
        'descricao' => 'O Teclado utiliza switches mecânicos (Vermelho, Azul, Marrom), podendo se adequar ao padrão de qualquer Gamer! É produzido com material de mais alta qualidade. <br>
        Esse Teclado pode também ser customizado de acordo com o gosto do comprador, basta entrar em contato com a nossa equipe ao realizar a compra.',
        'imagem' => './imagens/imagensProdutos/tecladoZenit.png'
        //'imagem2' => './imagens/imagensProdutos/tecladoBarebone'
    ],
    [
        'id' => 2,
        'nome' => 'Mouse Gamer - Zenit',
        'preco' => 159.99,
        'categoria' => 'cFio',
        'descricao_curta' => 'Mouse Gamer oficial da Zenit',
        'descricao' => 'O Mouse Gamer da Zenit tem RGB customizável por driver e botões laterais, podendo se adequar ao padrão de qualquer Gamer! É produzido com material de mais alta qualidade. <br>
        Esse Mouse pode também ser customizado de acordo com o gosto do comprador, basta entrar em contato com a nossa equipe ao realizar a compra.',
        'imagem' => './imagens/imagensProdutos/mouseZenit.png'
        //'imagem2' => './imagens/imagensProdutos/mouseZenit2'
    ],
    [
        'id' => 3,
        'nome' => 'Lightbar - Zenit',
        'preco' => 49.99,
        'categoria' => 'cFio',
        'descricao_curta' => 'Lightbar oficial da Zenit',
        'descricao' => 'A Lightbar da Zenit tem cor de LED customizável por driver, podendo se adequar ao padrão de qualquer Gamer! É produzido com material de mais alta qualidade. <br>
        Essa Lightbar pode também ser customizado de acordo com o gosto do comprador, basta entrar em contato com a nossa equipe ao realizar a compra.',
        'imagem' => './imagens/imagensProdutos/lightbarZenit.png'
        //'imagem2' => './imagens/imagensProdutos/lightbarZenit2'
    ]
];

?>