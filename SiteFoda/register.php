<!DOCTYPE html>
<html>
<head>
    <title>Registro de Colaborador/Cliente</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
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
    <h1>Registro</h1>
    <form method="post" action="register.php">
        <label for="username">Seu Nome:</label>
        <input type="text" name="username" required><br>

        <label for="email">Seu Email:</label>
        <input type="text" name="email" required><br>

        <label for="password">Senha:</label>
        <input type="password" name="password" required><br>

        <label for="phone">Telefone:</label>
        <input type="number" name="phone" required><br>

        <label for="user_sex">Gênero</label>
        <select name="user_sex">
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
        </select><br>

        <label for="user_type">Você é um Profissional ou Cliente ?</label>
        <select name="user_type">
            <option value="profissional">Profissional</option>
            <option value="cliente">Cliente</option>
        </select><br>

        <input type="submit" value="Registrar">
    </form>
    <div class="conteudo-flex">
            <p>Já tem uma conta ?  </p>
            <a href="login.php"> Entre Aqui!</a>
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


    <?php
    require_once 'config.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $phone = $_POST['phone'];
        $user_sex = $_POST['user_sex'];
        $user_type = $_POST['user_type'];  // Adicione esta linha para obter o valor do tipo de usuário do formulário.
    
        if ($user_type == "cliente") {
            $sql = "INSERT INTO users (username, email, password, phone, user_sex) VALUES (?, ?, ?, ?, ?)";
        } else {
            $sql = "INSERT INTO workers (username, email, password, phone, user_sex) VALUES (?, ?, ?, ?, ?)";
        }
    
        $stmt = $conn->prepare($sql);
    
        if ($stmt) {
            $stmt->bind_param("sssss", $username, $email, $password, $phone, $user_sex);
    
            if ($stmt->execute()) {
                echo "Registro bem-sucedido. <a href='login.php'>Faça login aqui</a>.";
            } else {
                echo "Erro ao registrar: " . $stmt->error;
            }
    
            $stmt->close();
        } else {
            echo "Erro na preparação da declaração: " . $conn->error;
        }
    }

    $conn->close();
    ?>
</body>
</html>