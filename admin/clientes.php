<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin-style.css">
    <title>Clientes - Painel de Administração</title>
    <style>

        main {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        .customer-card {
            width: 300px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
        }

        .customer-card-content {
            padding: 20px;
        }

        .customer-card-content h3 {
            color: #333;
        }

        .customer-card-content p {
            color: #666;
        }

        .customer-card-content button {
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
        <div class="customer-card">
            <div class="customer-card-content">
                <h3>Cliente 1</h3>
                <p><strong>Email:</strong> cliente1@gmail.com</p>
                <p><strong>Telefone:</strong> (11) 98765-4321</p>
                <button>Editar</button>
            </div>
        </div>

        <div class="customer-card">
            <div class="customer-card-content">
                <h3>Cliente 2</h3>
                <p><strong>Email:</strong> cliente2@gmail.com</p>
                <p><strong>Telefone:</strong> (11) 98765-4321</p>
                <button>Editar</button>
            </div>
        </div>

        <div class="customer-card">
            <div class="customer-card-content">
                <h3>Cliente 3</h3>
                <p><strong>Email:</strong> cliente3@gmail.com</p>
                <p><strong>Telefone:</strong> (11) 98765-4321</p>
                <button>Editar</button>
            </div>
        </div>

        <div class="customer-card">
            <div class="customer-card-content">
                <h3>Cliente 4</h3>
                <p><strong>Email:</strong> cliente4@gmail.com</p>
                <p><strong>Telefone:</strong> (11) 98765-4321</p>
                <button>Editar</button>
            </div>
        </div>

    </main>

</body>

</html>