<?php
$host = "localhost";
$user = "root"; // seu usuário do MySQL
$pass = "root";     // sua senha do MySQL
$db   = "sistema_login";

// Criar conexão
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>