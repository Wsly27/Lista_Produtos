<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Produtos - Bona Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
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
    <h1 class="mb-4">Nossos Produtos</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Produto</th>
                <th>Preço</th>
                <th>Categoria</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($produtos as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                    <td>{{ $produto->categoria?->nome ?? '-' }}</td>
                    <td>
                        <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-sm btn-outline-primary" title="Editar">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger" title="Excluir" onclick="return confirm('Tem certeza que deseja excluir este produto?')">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5">Nenhum produto cadastrado.</td></tr>
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('produtos.create') }}" class="btn btn-success mt-3">Adicionar Produto</a>
</div>

</body>
</html>
