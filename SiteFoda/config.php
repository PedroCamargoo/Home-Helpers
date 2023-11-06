<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "meu_banco_de_dados";

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
/*else{
    echo "Conectado com sucesso";
}*/
?>