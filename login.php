<?php
include 'data.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styleLogin.css">
    <title>Cadastro - <?php print $nomeLoja ?></title>
</head>
<body>
    <?php
    require './partials/header.php';
    ?>
    <main>
        <section id="login">
            <div class="loginForm">
                <div class="sectionTitle">
                    <h2>Cadastro</h2>
                </div>
                <form action="https://wa.me/5511999999999?text=Gostaria%20de%20mais%20informações" target="_blank">
                    <div class="group">
                        <label for="name">Nome Completo</label>
                        <input type="text" placeholder="Nome Completo" id="name" required>
                    </div>
                    <div class="group">
                        <label for="emailForm">Email</label>
                        <input type="email" placeholder="Email" id="emailForm" required>
                    </div>
                    <div class="group">
                        <label for="numberForm">Número</label>
                        <input type="tel" placeholder="Número (XX) XXXXX-XXXX" id="numberForm" maxlength="11" pattern="[0-9]{10,11}" inputmode="numeric" title="Apenas números" required>
                    </div>
                    <div class="group">
                        <label for="passwordForm">Senha</label>
                        <input type="password" placeholder="Senha" id="passwordForm" required minlength="8">
                    </div>
                    <div class="group">
                        <label for="passwordConfirm">Confirmar Senha</label>
                        <input type="password" placeholder="Confirmar Senha" id="passwordConfirm" required minlength="8">
                    </div>
                    <button type="submit">Cadastrar</button>
                    <div class="textoForm"><p>Já tem uma conta? <a href="./login.php">Login</a></p></div>
                </form>
            </div>
        </section>
    </main>
    <?php
    require './partials/footer.php';
    ?>
</body>
</html>