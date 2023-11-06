<?php
session_start();

if (isset($_SESSION['autenticado']) && $_SESSION['autenticado'] == true) {
    $autenticado = "true";
} else {
    $autenticado = "false";
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div id="notlogged" style="display: none;">
        <header class="margem">
            <div class="logo">
                <a href="index.php"><img src="img/logo.png" alt="Home Helpers"></a>
            </div>
            <div class="header-links">
                <a href="register.php">Registrar</a>
                <a href="login.php">Login</a>
            </div>
        </header>
    </div>
    <div id="logged" style="display: none;">
        <header class="margem">
            <div class="logo">
                <a href="index.php"><img src="img/logo.png" alt="Home Helpers"></a>
            </div>
            <div class="header-links">
                <a href="user.php"><?php echo $_SESSION['username'] ?></a>
                <a href="logout.php">Sair</a>
            </div>
        </header>
    </div>
    <hr class="margem">
    <div class="header-secundario">
        <div class="margem">
            <div class="modalidades">
                <a href="verificar_login.php?destino=desenvolvedor.php">
                    <img src="img/modalidade1.png" alt="DEV">
                    <h3>Desenvolvedor</h3>
                </a>
            </div>
            <div class="modalidades">
                <a href="verificar_login.php?destino=servico_casa.php">
                    <img src="img/modalidade2.png" alt="marido de aluguel">
                    <h3>Serviços <br> para a Casa</h3>
                </a>
            </div>
            <div class="modalidades">
                <a href="verificar_login.php?destino=assistencia.php">
                    <img src="img/modalidade3.png" alt="assistencia">
                    <h3>Assistencia <br> Tecnica</h3>
                </a>
            </div>
            <div class="modalidades">
                <a href="verificar_login.php?destino=autos.php">
                    <img src="img/modalidade4.png" alt="autos">
                    <h3>Autos</h3>
                </a>
            </div>
            <div class="modalidades">
                <a href="verificar_login.php?destino=Reformas.php">
                    <img src="img/modalidade5.png" alt="reforma">
                    <h3>Reformas e <br> Montagem de Moveis</h3>
                </a>
            </div>
        </div>
    </div>
    </div>
    <hr class="margem">
    <div class="conteudo">
        <div class="margem">
            <h1>Bem-vindo, <?php echo $_SESSION['username']; ?>!</h1>
        </div>
        <p> Parabéns por se juntar à melhor plataforma para encontrar serviços e freelancers! Estamos emocionados em tê-lo como parte da nossa comunidade. <br><br>

            No nosso site, você encontrará um mundo de oportunidades à sua disposição. Seja você um talentoso prestador de serviços ou alguém em busca de freelancers experientes, aqui é o lugar certo para estar.<br><br>

            Aqui, a excelência e a qualidade são o nosso foco. Você terá acesso a uma ampla gama de talentos em diversas áreas, desde criação, escrita, design, programação, até muitos outros campos. Não importa se você está procurando o profissional perfeito para o seu projeto ou deseja oferecer seus serviços, você está no lugar certo.<br><br>

            Acreditamos que todos merecem encontrar o melhor para suas necessidades, e estamos aqui para tornar isso possível. Seja para realizar um projeto único ou estabelecer uma parceria contínua, estamos comprometidos em proporcionar a melhor experiência para todos os nossos usuários.<br><br>

            Mais uma vez, parabéns por se juntar à nossa comunidade, onde a excelência e a qualidade se encontram. Estamos ansiosos para ver você alcançar o sucesso e encontrar os serviços ou freelancers ideais para suas necessidades. Aproveite ao máximo as oportunidades que o nosso site tem a oferecer e comece a trilhar seu caminho para o sucesso!<br>
        </p>
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

<script>
    // Inicie a sessão (pode ser PHP para verificar a autenticação)
    var usuarioLogado = <?php echo $autenticado; ?>; // Suponha que o usuário não está logado

    if (usuarioLogado == null) {
        var usuarioLogado = false;
    }
    // Verifique o estado de autenticação (pode ser PHP)
    // Defina a variável 'usuarioLogado' como verdadeira se o usuário estiver logado

    if (usuarioLogado) {
        document.getElementById('logged').style.display = 'block';
    } else {
        document.getElementById('notlogged').style.display = 'block';
    }
</script>