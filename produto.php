$servidor = ""; // IP do colega
$usuario = "root"; // Usuário do MySQL
$senha = ""; // Senha do MySQL
$banco = "meubanco"; // Nome do banco

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conectado ao banco de dados remoto!";