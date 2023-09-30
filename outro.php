<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arena de Futevôlei</title>
    <!-- Link para o Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Seu arquivo de estilos personalizados -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header class="jumbotron text-center">
            <h1 class="display-4">Bem-Vindo à Arena de Futevôlei</h1>
            <p class="lead">O melhor lugar para jogar e aprimorar suas habilidades de futevôlei!</p>
            <a class="btn btn-primary btn-lg" href="inscricao.php" role="button">Faça Sua Inscrição</a>
        </header>

        <main>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="card-title">Sobre Nós</h2>
                            <p class="card-text">Nossa arena é equipada com as melhores quadras e oferece treinamentos de futevôlei de alta qualidade. Junte-se a nós e torne-se um mestre do esporte!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="card-title">Contate-Nos</h2>
                            <p class="card-text">Entre em contato conosco para obter mais informações sobre reservas, aulas e eventos.</p>
                            <a class="btn btn-primary" href="contato.php" role="button">Entre em Contato</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="text-center">
            <p>&copy; <?php echo date("Y"); ?> Arena de Futevôlei</p>
        </footer>
    </div>
</body>
</html>