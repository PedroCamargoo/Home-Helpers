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
    <div>
            <p>Parabéns por se juntar ao Home Helpers e alcançar a tão desejada liberdade financeira! Estamos entusiasmados em tê-lo(a) como parte da nossa comunidade. Com o Home Helpers, você agora tem a oportunidade de se cadastrar e realizar freelances, abrindo portas para uma nova dimensão de oportunidades profissionais. <br><br>

                A liberdade financeira é um objetivo que muitos almejam, e estamos aqui para ajudá-lo(a) a conquistá-la. Com a flexibilidade de escolher projetos que se encaixem no seu cronograma e nas suas habilidades, você pode criar o seu próprio caminho para o sucesso. Não importa se você deseja complementar sua renda atual ou buscar uma carreira independente em tempo integral, o Home Helpers está aqui para apoiar você em sua jornada.<br><br>

                Nossa plataforma foi projetada para conectar profissionais talentosos a oportunidades de trabalho que atendam às suas necessidades e preferências. Seja qual for o seu campo de atuação, você encontrará uma ampla variedade de projetos e contratos esperando por você. Seja criando, escrevendo, projetando, programando, ou prestando serviços em diversas áreas, o Home Helpers é o seu espaço para se destacar. <br><br>

                A liberdade financeira é mais do que apenas ganhar dinheiro; é sobre ter o controle sobre sua vida e suas escolhas. Com o Home Helpers, você pode criar seu próprio caminho, definir seu próprio ritmo e alcançar os objetivos que almeja. Estamos aqui para apoiá-lo em cada passo do caminho, fornecendo a você as ferramentas e recursos necessários para alcançar o sucesso financeiro. <br><br>

                Uma vez mais, parabéns por se juntar ao Home Helpers e por embarcar nessa jornada em busca da liberdade financeira. Estamos ansiosos para ver você prosperar e alcançar todos os seus objetivos profissionais. Conte conosco para fornecer o suporte e a comunidade de que você precisa para ter sucesso. Boa sorte em sua jornada e aproveite ao máximo as oportunidades que o Home Helpers tem a oferecer!</p>
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