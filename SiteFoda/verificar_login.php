<?php
// Inicie a sessão, caso ainda não tenha sido iniciada
session_start();

$user_type = $_SESSION['tipo'];

// Verifique se o usuário está autenticado (isso pode variar dependendo do seu sistema de autenticação)
if (isset($_SESSION['autenticado']) && $user_type == "users") {
    // O usuário está autenticado, redirecione para a página de destino
    $destino = isset($_GET['destino']) ? $_GET['destino'] : 'index.php'; // Página de destino padrão
    $destino = str_replace(".php", "_users.php", $destino);
    header("Location: $destino");
    exit();
} 
elseif(isset($_SESSION['autenticado']) && $user_type == "workers"){
    // O usuário está autenticado, redirecione para a página de destino
    $destino = isset($_GET['destino']) ? $_GET['destino'] : 'index.php'; // Página de destino padrão
    $destino = str_replace(".php", "_workers.php", $destino);
    header("Location: $destino");
    exit();
}
else {
    // O usuário não está autenticado, redirecione para a página de login
    $destino = isset($_GET['destino']) ? $_GET['destino'] : 'index.php'; // Página de destino padrão
    $_SESSION['destino'] = $destino;
    header("Location: login.php"); // Substitua "login.php" pelo nome da sua página de login
    exit();
}
?>