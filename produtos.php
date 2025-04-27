
<?php
include 'conexaoProd.php'; // Inclui o arquivo de conexão com o banco de dados

$sql = "SELECT nome, valor, qtdestoque, imagem FROM produtos"; // Consulta SQL para buscar os produtos
$result = $conn->query($sql);

if (!$result) {
    die("Erro na consulta SQL: " . $conn->error);
}
?>
<!-- filepath: c:\wamp64\www\AVA2\AVA2\produtos.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>                             
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
<header>
        <div class="cabecalho container">
            <div class="logo">
                <a href="index.html">
                    <img src="img/logo.png" alt="Logo Hamburgueria">
                </a>
            </div>
            <nav class="menu">
                <ul id="menuOptions" class="hidden" aria-hidden="true">
                    <li><a href="index.html">Início</a></li>
                    <li><a href="sobre.html">Sobre</a></li>
                    <li><a href="produtos.php">Produtos</a></li>
                    <li><a href="novidades.php">Novidades</a></li>
                    <li><a href="contato.html">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <h1 class="titulo-produtos">Confira nossos Produtos</h1>
            <div class="produtos">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='produto-card'>";
                    echo "<h2 class='produto-nome'>" . $row['nome'] . "</h2>";
                    echo "<img src='" . $row['imagem'] . "' alt='Imagem do Produto' class='produto-imagem'>";
                    echo "<p class='produto-preco'><strong>Preço:</strong> R$ " . number_format($row['valor'], 2, ',', '.') . "</p>";
                    echo "<p class='produto-estoque'><strong>Estoque:</strong> " . ($row['qtdestoque'] ?? 'Indisponível') . " unidades</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>Não há produtos disponíveis no momento.</p>";
            }
            ?>
            </div>
        </div>
    </main>

    <footer class="rodape-criativo">
        <div class="container-rodape">
            <div class="info-contato">
                <h3>McCria’s Hamburgueria</h3>
                <p>Desde 1990 servindo sabor com história.</p>
                <p><strong>Endereço:</strong> Rua dos Sabores, 123 - Centro</p>
                <p><strong>Contato:</strong> (11) 1234-5678</p>
            </div>
            <div class="redes-sociais">
                <h4>Nos siga</h4>
                <div class="icones-sociais">
                    <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            <div class="assinatura">
                <p>&copy; 2025 McCria’s. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
</body>
</html>