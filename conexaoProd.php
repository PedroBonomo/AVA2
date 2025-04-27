<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "client"; // Substitua pelo nome correto do banco de dados

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>