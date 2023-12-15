<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin-style.css">
    <title>Relatórios - Painel de Administração</title>
    <style>
        main {
            padding: 20px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .report-card {
            width: 300px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            padding: 20px;
        }

        .report-card h3 {
            color: #333;
        }

        .report-card p {
            color: #666;
        }

        .report-card button {
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
        <div class="report-card">
            <h3>Vendas do Mês</h3>
            <p>Total de Vendas: R$ 50.000,00</p>
            <p>Vendas Pendentes: R$ 5.000,00</p>
            <p>Vendas Concluídas: R$ 45.000,00</p>
            <button>Detalhes</button>
        </div>

        <div class="report-card">
            <h3>Lucro do Ano</h3>
            <p>Total de Lucro: R$ 25.000,00</p>
            <p>Lucro Pendente: R$ 2.000,00</p>
            <p>Lucro Concluído: R$ 23.000,00</p>
            <button>Detalhes</button>
        </div>

    </main>



</body>

</html>