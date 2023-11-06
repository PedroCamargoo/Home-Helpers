<?php
session_start()
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header class="margem">
        <div class="logo">
            <a href="index.php"><img src="img/logo.png" alt="Home Helpers"></a>
        </div>
        <div class="header-links">
            <a href="register.php">Registrar</a>
            <a href="login.php">Login</a>
        </div>
    </header>

    <div class="conteudo conteudo-centralizado">
        <h1>Faça Login para Continuar</h1>
        <h1>Login</h1>
        <form method="post" action="process_login.php">
            <label for="username">Nome de usuário:</label>
            <input type="text" name="username" required><br>

            <label for="password">Senha:</label>
            <input type="password" name="password" required><br>

            <input type="submit" value="Entrar">
        </form>
        <div class="conteudo-flex">
            <p>Ainda não tem uma conta ?  </p>
            <a href="register.php"> Se Cadastre</a>
        </div>
    </div>
    <footer class="rodape">
        <div class="margem">
            <div class="logo">
                <a href="index.php"><img src="img/logo.png" alt="Home Helpers"></a>
            </div>
            <div class="footer-links">
                <a href="about_us.php">Sobre Nós</a>
                <a href="use_terms.php">Termos de Uso</a>            
            </div>
            <div class="recrutamento">
                <h3>Você é um prestador <br> de serviço ?</h3>
                <a href="register.php">Cadastre-se</a>
            </div>
        </div>
    </footer>
    <div class="footer-secundario">
            <p>Criado em 2023, Equipe Home Helpers | CST Análise e Desemvolvimento de Sistemas</p>
    </div>
</body>

</html>

