<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Detalhes do Produto</h1>
        <a href="{{ route('produtos.index') }}" class="btn btn-primary mb-3">Voltar</a>

        <div class="card">
            <div class="card-header">
                <strong>Nome:</strong> {{ $produto->nome }}
            </div>
            <div class="card-body">
                <p class="card-text"><strong>Descrição:</strong> {{ $produto->descricao }}</p>
                <p class="card-text"><strong>Preço:</strong> R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
                <p class="card-text"><strong>Quantidade:</strong> {{ $produto->quantidade }}</p>
            </div>
        </div>
    </div>
</body>
</html>