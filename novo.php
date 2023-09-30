<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de Treinamento de Vôlei</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Estilos específicos para esta página */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #1e90ff;
            color: #fff;
            padding: 30px 0;
        }
        h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }
        p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .cta-button {
            background-color: #ff6600;
            color: #fff;
            padding: 15px 30px;
            font-size: 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out;
        }
        .cta-button:hover {
            background-color: #ff4500;
        }
    </style>
</head>
<body>
    <header class="header">
        <h1>Seja um Campeão no Vôlei</h1>
        <p>Descubra o melhor lugar para aprimorar suas habilidades de vôlei!</p>
        <a class="cta-button" href="novo.php">Inscreva-se Agora</a>
    </header>

    <main>
        <section class="about">
            <h2>Sobre Nós</h2>
            <p>O Centro de Treinamento de Vôlei é dedicado a transformar você em um jogador excepcional. Nossa equipe de treinadores experientes irá ajudá-lo a atingir o próximo nível.</p>
        </section>

        <section class="contact">
            <h2>Entre em Contato</h2>
            <p>Estamos aqui para responder a todas as suas perguntas e ajudá-lo a começar sua jornada no vôlei.</p>
            <a class="cta-button" href="contato.php">Entre em Contato</a>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; <?php echo date("Y"); ?> Centro de Treinamento de Vôlei</p>
    </footer>
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de Treinamento de Vôlei</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <h1 class="title">Seja um Campeão no Vôlei</h1>
            <p class="subtitle">Descubra o melhor lugar para aprimorar suas habilidades de vôlei!</p>
            <a class="cta-button" href="novo.php">Inscreva-se Agora</a>
        </div>
    </header>

    <main class="main">
        <div class="container">
            <section class="about">
                <h2>Sobre Nós</h2>
                <p>O Centro de Treinamento de Vôlei é dedicado a transformar você em um jogador excepcional. Nossa equipe de treinadores experientes irá ajudá-lo a atingir o próximo nível.</p>
            </section>

            <section class="contact">
                <h2>Entre em Contato</h2>
                <p>Estamos aqui para responder a todas as suas perguntas e ajudá-lo a começar sua jornada no vôlei.</p>
                <a class="cta-button" href="contato.php">Entre em Contato</a>
            </section>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <p class="footer-text">&copy; 
                <?php //echo date("Y"); ?> 
                Centro de Treinamento de Vôlei</p>
        </div>
    </footer>
</body>
</html> -->