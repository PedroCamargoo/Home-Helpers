<!DOCTYPE html>
<html>
<head>
    <title>Meu Site</title>
    <style>
        /* Estilos para o rodapé principal */
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        /* Estilos para o rodapé secundário */
        .footer-secondary {
            background-color: #444;
            color: #fff;
            padding: 10px;
            text-align: center; /* Centraliza o conteúdo */
        }
    </style>
</head>
<body>
    <footer>
        <p>Rodapé Principal</p>
        <hr>
    </footer>

    <div class="footer-secondary">
        <p>Rodapé Secundário</p>
    </div>
</body>
</html>












<?php
// Inicie a sessão, caso ainda não tenha sido iniciada
session_start();

// Verifique se o usuário está autenticado (isso pode variar dependendo do seu sistema de autenticação)
if (isset($_SESSION['autenticado'])) {
    // O usuário está autenticado, redirecione para a página de destino
    $destino = isset($_GET['destino']) ? $_GET['destino'] : 'index.php'; // Página de destino padrão
    $destino = str_replace(".php", "_users.php", $destino);
    header("Location: $destino");
    exit();
} else {
    // O usuário não está autenticado, redirecione para a página de login
    $_SESSION['destino'] = $destino;
    header("Location: login.php"); // Substitua "login.php" pelo nome da sua página de login
    exit();
}
?>