<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin-style.css">
    <title>Produtos - Painel de Administração</title>
    <style>
        main {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            display: flex;
        }

        .acai-card {
            width: 300px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .acai-card img {
            width: 100%;
            border-radius: 8px 8px 0 0;
        }

        .acai-card-content {
            padding: 20px;
        }

        .acai-card-content h3 {
            color: #333;
        }

        .acai-card-content p {
            color: #666;
        }

        .acai-card-content button {
            background-color: #360d4de7;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
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
        <div class="acai-card">
            <img src="../assets/acai1.png" alt="">
            <div class="acai-card-content">
                <h3>Açaí</h3>
                <p><strong>Preço:</strong> R$ <span id="price1">15,00</span></p>
                <label>Novo Preço:</label>
                <input type="text" placeholder="Novo preço">
                <button>Atualizar</button>
            </div>
        </div>

        <div class="acai-card">
            <img src="../assets/acai2.png" alt="">
            <div class="acai-card-content">
                <h3>Açaí Zero</h3>
                <p><strong>Preço:</strong> R$ <span id="price2">15,00</span></p>
                <label>Novo Preço:</label>
                <input type="text" placeholder="Novo preço">
                <button>Atualizar</button>
            </div>
        </div>

        <div class="acai-card">
            <img src="../assets/acai3.png" alt="">
            <div class="acai-card-content">
                <h3>Barca</h3>
                <p><strong>Preço:</strong> R$ <span id="price2">30,00</span></p>
                <label>Novo Preço:</label>
                <input type="text" placeholder="Novo preço">
                <button>Atualizar</button>
            </div>
        </div>

        <div class="acai-card">
            <img src="../assets/acai4.png" alt="">
            <div class="acai-card-content">
                <h3>Casadinho</h3>
                <p><strong>Preço:</strong> R$ <span id="price2">18,00</span></p>
                <label>Novo Preço:</label>
                <input type="text" placeholder="Novo preço">
                <button>Atualizar</button>
            </div>
        </div>

        <div class="acai-card">
            <img src="../assets/acai5.png" alt="">
            <div class="acai-card-content">
                <h3>Taça</h3>
                <p><strong>Preço:</strong> R$ <span id="price2">25,00</span></p>
                <label>Novo Preço:</label>
                <input type="text" placeholder="Novo preço">
                <button>Atualizar</button>
            </div>
        </div>

        <div class="acai-card">
            <img src="../assets/acai6.png" alt="">
            <div class="acai-card-content">
                <h3>Tigela</h3>
                <p><strong>Preço:</strong> R$ <span id="price2">20,00</span></p>
                <label>Novo Preço:</label>
                <input type="text" placeholder="Novo preço">
                <button>Atualizar</button>
            </div>
        </div>

    </main>

</body>

</html>