<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title') - InovaDigital</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Google Fonts (opcional) -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f8fa;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .navbar {
            background-color: #0056b3; /* azul */
        }
        .navbar-brand, .nav-link {
            color: #ffffff !important; /* branco */
        }
        .nav-link:hover {
            color: #ffc107 !important; /* amarelo */
        }
        footer {
            background-color: #0056b3;
            color: #ffffff;
            padding: 15px 0;
            margin-top: auto;
            text-align: center;
        }
        .container {
            margin-top: 30px;
            margin-bottom: 30px;
        }
        .card {
            border-radius: 8px;
            box-shadow: 0 8px 20px rgb(0 0 0 / 0.1);
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">InovaDigital</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('produtos.index') }}">Produtos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('cadastro') }}">Cadastro</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('sobre') }}">Sobre</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo principal -->
    <main class="flex-grow-1">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Rodapé -->
    <footer>
        <div class="container">
            &copy; {{ date('Y') }} InovaDigital. Todos os direitos reservados.
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle (Popper + JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
