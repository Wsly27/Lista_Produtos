<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nova Categoria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Adicionar Categoria</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome da Categoria</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
</body>
</html>
