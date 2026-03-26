<?php
// Pegando através do atributo name
    $nome = $_POST['nome']; 
    $email = $_POST['email'];
    $numero = $_POST['numero'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['passwordConfirm'];
    if ($password===$passwordConfirm){
        echo "Nome: $nome<br>
        Email: $email<br>
        Número: $numero<br>
        Senha: $password<br>
        ";
    } else {
        echo "<script>alert('Senha Incorreta');</script>";
    };
?>
<br>
<a href="./index.php" style="color: #006eff; text-decoration: none;">Página Home</a>
