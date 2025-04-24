<?php
$servidor = "localhost";
$usuario = "root";
$senha = ""; // ou "root" no XAMPP
$banco = "empresa";

// Criar conexão
$conn = new mysqli($servidor, $usuario, $senha, $banco);

// Checar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
