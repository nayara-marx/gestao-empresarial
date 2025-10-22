<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Gestão Empresarial</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            background-color: #121212;
            color: #E0E0E0;
        }
        a {
            color: #E0E0E0;
        }
        a:hover {
            color: #ffffff;
        }
        .card {
            background-color: #1E1E1E;
            color: #E0E0E0;
            border: none;
            border-radius: 0.5rem;
        }
        .btn-primary {
            background-color: #333333;
            border: none;
        }
        .btn-primary:hover {
            background-color: #555555;
        }
        .btn-success {
            background-color: #28a745;
            border: none;
        }
        .btn-success:hover {
            background-color: #218838;
        }
        .form-control {
            background-color: #1E1E1E;
            color: #E0E0E0;
            border: 1px solid #333333;
        }
        .form-control:focus {
            background-color: #1E1E1E;
            color: #E0E0E0;
            border-color: #555555;
            box-shadow: none;
        }
        .navbar {
            background-color: #1E1E1E !important;
        }
        .alert-success {
            background-color: #28a745;
            color: white;
        }
        .alert-danger {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>
<body>
    @include('partials.navbar')

    <main class="py-4">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
