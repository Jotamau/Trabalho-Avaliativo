<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Açaí</title>
</head>

<body>

<header>
        <div class="logo-container">
            <img src="/assets/logo.png" alt="">
        </div>
        <nav>
            <ul>
                <li><a href="../index.php">Início</a></li>
                <li><a href="cardapio.php">Cardápio</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="login.php">
                        <span class="material-symbols-outlined">
                            account_circle
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="contato-container">
            <h2>Entre em Contato</h2>

            <form class="contato-form" action="#" method="post">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Mensagem:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">Enviar Mensagem</button>
            </form>
        </div>
    </main>

</body>

</html>