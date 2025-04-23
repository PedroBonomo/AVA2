<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "empresa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT nome, valor FROM produtos";
$result = $conn->query($sql);

echo "<h1>Produtos</h1>";
echo "<ul>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["nome"] . " - R$" . $row["valor"] . "</li>";
    }
} else {
    echo "<li>Nenhum produto disponível.</li>";
}
echo "</ul>";

$conn->close();
?>