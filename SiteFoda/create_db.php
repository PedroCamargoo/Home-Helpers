<?php
$conn = new mysqli("localhost", "root", );

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS meu_banco_de_dados";
if ($conn->query($sql) === TRUE) {
    echo "Banco de dados criado com sucesso.";
} else {
    echo "Erro ao criar o banco de dados: " . $conn->error;
}

$conn->close();
?>
