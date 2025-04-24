<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novidades</title>
    <link rel="stylesheet" href="style.css">
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
              <h1>Confira as Novidades do Mc Cria's!</h1>
          
              <?php
              include 'conexao.php';
          
              $sql = "SELECT resumo, descricao FROM novidades";
              $result = $conn->query($sql);
          
              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                      echo "<div class='novidade'>";
                      echo "<h2>" . $row["resumo"] . "</h2>";
                      echo "<p>" . $row["descricao"] . "</p>";
                      echo "</div>";
                  }
              } else {
                  echo "<p>Não temos novidades no momento!</p>";
              }
          
              $conn->close();
              ?>    
        </div>
    </main>
      
      
    <footer>
        <p>&copy; 2025 Hamburgueria. Todos os direitos reservados.</p>
    </footer>
</body>
</html>