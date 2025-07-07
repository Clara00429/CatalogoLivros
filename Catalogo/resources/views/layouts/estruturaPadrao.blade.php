<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/tema-escuro.css') }}">
</head>

    <title>Catalogo de Livros</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid py-3" style="background-color: #642764;" >
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Sobre</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contatos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Sair</a>
                    </li>
                </ul>
            </div>
            <div class="ms-auto d-flex align-items-center">
                <x-alternar-tema />
            </div>
        </div>
    </nav>

    <main class="container my-4 flex-grow-1">
        @yield('conteudo')
    </main>

    <div class="container">
        <footer class="py-3 my-4 border-top">      
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a class="nav-link px-2 text-body-secondary" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link px-2 text-body-secondary" href="#">Sobre</a></li>
                <li class="nav-item"><a class="nav-link px-2 text-body-secondary" href="#">Contatos</a></li>
                <li class="nav-item"><a class="nav-link px-2 text-body-secondary" href="#">Sair</a></li>
            </ul>
            <p class="text-center text-body-secondary">&copy; 2025 Clara</p> 
        </footer>
    </div>
<script src="//unpkg.com/alpinejs" defer></script>

</body>
</html>