<?php
session_start()
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <link rel="stylesheet" href="css/index.css">
    <style>
        #video-container {
            position: relative;
            width: 640px;
            height: 360px;
        }

        #black-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: black;
            z-index: 1;
        }

        video {
            width: 100%;
            height: 100%;
        }
    </style>
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
    <div class="conteudo">
        <div id="video-container">
            <div id="black-overlay"></div>
            <video controls autoplay>
                <source src="vid/vid1.mp4" type="video/mp4">
                Seu navegador não suporta a reprodução de vídeos.
            </video>
        </div>
        <script>
        // Adicione um ouvinte de evento para o evento "canplay" do vídeo
        var video = document.querySelector('video');
        video.addEventListener('canplay', function() {
            // Quando o vídeo estiver pronto para reprodução, remova o overlay preto
            var blackOverlay = document.getElementById('black-overlay');
            blackOverlay.style.display = 'none';
        });
    </script>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
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