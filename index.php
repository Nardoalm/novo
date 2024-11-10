<?php 
require_once 'usuarios.php';
$u = new Usuario;
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <div class="container">
        <form method="post" action="processa.php">
            <h1>Cadastrar</h1>
            <div class="input-container">
                <input name="nome" placeholder="Insita o nome de usuário" type="user" required maxlength="30">
                <img width="20" height="20" src="https://img.icons8.com/ios/50/user--v1.png" alt="user--v1" />
            </div>

            <div class="input-container">
                <input name="email" placeholder="Email" type="email" required maxlength="40">
                <img width="20" height="20" src="https://img.icons8.com/material-outlined/24/new-post.png" alt="new-post"/>
            </div>

            <div class="input-container">
                <input name="senha" placeholder="Senha" type="password" required maxlength="32">
                <img width="20" height="20" src="https://img.icons8.com/ios/50/lock--v1.png" alt="lock--v1" />
            </div>

            <button type="submit" class="submit-button">Cadastrar</button>

            <div class="register-link">
                <p>Já está cadastrado? <a href="index.html">Entrar</a></p>
            </div>
        </form>
    </div>
    <?php  http://localhost/C:/xampp/htdocs/teste2

    if(isset($_POST['nome']))
    {
        $nome addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        if(!empty($nome) && !empty($email) && !empty($senha))
        {
            $u->conectar("login", "localhost","root","");
            if($u->msgErro == "")
            if{
                $u->cadastrar($nome, $email, $senha);
            }
            else
            {
                echo "Erro: ".$u->msgErro;
            }
        }else{
            echo "Preencha todos os campos!";
        }
    }
    ?>
</body>
</html>