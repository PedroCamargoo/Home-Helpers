<?php
session_start();
require_once 'config.php';

$autenticado = false; // Inicializa a variável como falso
$destino = isset($_SESSION['destino']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql_users = "SELECT * FROM users WHERE username = ?";
    $stmt_users = $conn->prepare($sql_users);

    if ($stmt_users) {
        $stmt_users->bind_param("s", $username);
        $stmt_users->execute();
        $result_users = $stmt_users->get_result();
        $row_users = $result_users->fetch_assoc();

        if ($row_users && password_verify($password, $row_users['password'])) {
            // Login bem-sucedido na tabela "users".
            $_SESSION['username'] = $username;
            $_SESSION['tipo'] = "users"; // Substitua $tipo pelo tipo (workers ou users) do usuário autenticado
            $autenticado = true; // Define como verdadeiro
        }

        $stmt_users->close();
    }

    if (!$autenticado) { // Se não estiver autenticado na tabela "users", tente a tabela "workers"
        $sql_workers = "SELECT * FROM workers WHERE username = ?";
        $stmt_workers = $conn->prepare($sql_workers);

        if ($stmt_workers) {
            $stmt_workers->bind_param("s", $username);
            $stmt_workers->execute();
            $result_workers = $stmt_workers->get_result();
            $row_workers = $result_workers->fetch_assoc();

            if ($row_workers && password_verify($password, $row_workers['password'])) {
                // Login bem-sucedido na tabela "workers".
                $_SESSION['username'] = $username;
                $_SESSION['tipo'] = "workers";
                $autenticado = true; // Define como verdadeiro
            }

            $stmt_workers->close();
        }
    }

    if ($autenticado && isset($_SESSION['destino'])) {
        $_SESSION['autenticado'] = $autenticado;
        // Redirecione com base no valor de $autenticado
        if ($_SESSION['tipo'] === "users") {
            $destino = str_replace(".php", "_users.php", $destino);
            header("Location: $destino");
        } else {
            $destino = str_replace(".php", "_workers.php", $destino);
            header("Location: $destino");
        }
        exit;
    } elseif($autenticado) {
        $_SESSION['autenticado'] = $autenticado;
        if ($_SESSION['tipo'] === "users") {
            header("Location: welcome_users.php");
        } else {
            header("Location: welcome_workers.php");
        }
        exit;
    }
    
    else {
        // Se o login falhar em ambas as tabelas, exiba uma mensagem de erro.
        echo "Credenciais inválidas. <a href='login.php'>Tente novamente</a>.";
    }
}

$conn->close();
