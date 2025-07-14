<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias - Bona Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>

    <div class="topo text-center mt-3">
        <h1>Project Bona</h1>
    </div>

    <div class="container mt-3 d-flex gap-2 justify-content-center">
    <a href="{{ url('/') }}" class="btn btn-light">Home</a>
    <a href="{{ url('/produtos') }}" class="btn btn-secondary">Produtos</a>
    <a href="{{ url('/categorias') }}" class="btn btn-dark">Categorias</a>
</div>


    <div class="container mt-5">
        <h1 class="mb-4">Nossas Categorias</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->nome }}</td>
                        <td>
                            <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-sm btn-outline-primary" title="Editar">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger" title="Excluir" onclick="return confirm('Tem certeza que deseja excluir esta categoria?')">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Nenhuma categoria cadastrada.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <a href="{{ route('categorias.create') }}" class="btn btn-success">Adicionar Categoria</a>
    </div>
</body>
</html>
