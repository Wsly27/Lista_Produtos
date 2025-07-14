<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bona Store</title>
    <link rel="stylesheet" href="{{ url('CSS/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="topo">
        <h1>Project Bona</h1>
    </div>

    <div class="nav-buttons">
        <a href="http://127.0.0.1:8000" class="btn btn-light">Home</a>
        <a href="http://127.0.0.1:8000/produtos" class="btn btn-secondary">Produtos</a>
        <a href="http://127.0.0.1:8000/categorias" class="btn btn-dark">Categorias</a>
    </div>

    <main class="descricao">
        <p>Uma loja de várias coisas</p>
    </main>

    <footer>
        <p class="mb-0">&copy; {{ date('Y') }} Project Bona. Todos os direitos reservados.</p>
    </footer>
</body>

</html>
