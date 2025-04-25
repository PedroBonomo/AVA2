<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Novidades</title>
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
        <ul>
          <li><a href="index.html">Início</a></li>
          <li><a href="sobre.html">Sobre</a></li>
          <li><a href="produtos.html">Produtos</a></li>
          <li><a href="novidades.php">Novidades</a></li>
          <li><a href="contato.html">Contato</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="novidades">
    <div class="container">
      <h1 class="titulo-novidade">Confira as Novidades do Mc Cria's!</h1>
      <div class="cards">
      <?php
include 'conexao.php';

$sql = "SELECT resumo, descricao, imagem FROM novidades";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='card'>";
        echo "<i class='fas fa-burger icone vermelho'></i>";
        echo "<h2>" . $row['resumo'] . "</h2>";
        echo "<p>" . $row['descricao'] . "</p>";
        echo "<div class='imagem-container'>";
        echo "<img src='img/novidades/" . $row['imagem'] . "' alt='Imagem de novidade' class='imagem-novidade'>";
        echo "</div>";
        echo "</div>";
    }
} else {
  echo '
  <a href="index.html" class="card-link">
    <div class="card">
      <i class="fas fa-face-sad-tear icone vermelho"></i>
      <h2>Sem novidades por enquanto!</h2>
      <p>Mas não se preocupe, em breve vem coisa boa por aí 🍔🔥</p>
    </div>
  </a>
  ';
}

$conn->close();
?>
      </div>
    </div>
  </main>

  <footer>
    <p>&copy; 2025 Hamburgueria. Todos os direitos reservados.</p>
  </footer>
</body>
</html>
