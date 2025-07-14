<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Editar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<div class="container mt-5">
    <h1>Editar Produto</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" value="{{ old('nome', $produto->nome) }}" required />
        </div>
        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="number" step="0.01" name="preco" class="form-control" value="{{ old('preco', $produto->preco) }}" required />
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" class="form-control">{{ old('descricao', $produto->descricao) }}</textarea>
        </div>
        <div class="mb-3">
            <label for="categoria_id" class="form-label">Categoria</label>
            <select name="categoria_id" class="form-select">
                <option value="">-- Selecione uma categoria --</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}" {{ (old('categoria_id', $produto->categoria_id) == $categoria->id) ? 'selected' : '' }}>
                        {{ $categoria->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>

</body>
</html>
