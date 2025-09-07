<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Adicionar Novo Produto</h1>
        <a href="{{ route('produtos.index') }}" class="btn btn-primary mb-3">Voltar</a>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Ops!</strong> Houve alguns problemas com sua entrada. <br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('produtos.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <strong>Nome:</strong>
                        <input type="text" name="nome" class="form-control" placeholder="Nome do Produto">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <strong>Descrição:</strong>
                        <textarea class="form-control" name="descricao" placeholder="Descrição" style="height:150px"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <strong>Preço:</strong>
                        <input type="number" step="0.01" name="preco" class="form-control" placeholder="Preço">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <strong>Quantidade:</strong>
                        <input type="number" name="quantidade" class="form-control" placeholder="Quantidade">
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>