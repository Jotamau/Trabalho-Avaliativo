<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/admin-style.css">
  <title>Pedidos - Painel de Administração</title>
  <style>
main {
  padding: 20px;
}

.order-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.order-item {
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
  padding: 20px;
}

.order-item h3 {
  color: #333;
}

.order-item p {
  color: #666;
}

.order-item button {
  background-color: #360d4de7;
  color: #fff;
  padding: 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-top: 10px;
}

  </style>
</head>
<body>

  <header>
    <img src="../assets/logo.png" alt="Logo da Empresa">
  </header>

  <nav>
    <ul>
    <li><a href="dashboard.php">Início</a></li>
      <li><a href="pedidos.php">Pedidos</a></li>
      <li><a href="produtos.php">Produtos</a></li>
      <li><a href="clientes.php">Clientes</a></li>
      <li><a href="relatorio.php">Relatórios</a></li>
    </ul>
  </nav>

  <main>
    <ul class="order-list">
      <li class="order-item">
        <h3>Pedido #1</h3>
        <p><strong>ID do Pedido:</strong> 12345</p>
        <p><strong>Status:</strong> Em andamento</p>
        <p><strong>Produtos:</strong> Açaí Zero, Barca</p>
        <p><strong>Nome:</strong> Cliente 1</p>
        <p><strong>Endereço:</strong> Rua A, 123</p>
        <p><strong>Horário:</strong> 14:00</p>
        <button>Editar</button>
      </li>

      <li class="order-item">
        <h3>Pedido #2</h3>
        <p><strong>ID do Pedido:</strong> 54321</p>
        <p><strong>Status:</strong> Concluído</p>
        <p><strong>Produtos:</strong> Casadinho, Tigela</p>
        <p><strong>Nome:</strong> Cliente 2</p>
        <p><strong>Endereço:</strong> Rua B, 456</p>
        <p><strong>Horário:</strong> 15:30</p>
        <button>Editar</button>
      </li>


    </ul>
  </main>


</body>
</html>
