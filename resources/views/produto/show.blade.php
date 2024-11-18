<!DOCTYPE html>
<html>
<head>
  <title>Relatório de Produtos</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css">
</head>
<body>
<div class="m-4 text-center">
  <h1 class="mt-5">Relatório de Produtos</h1>
  <p>Este é o relatório de todos os produtos atuais no sistema.</p>
</div>

<div class="m-2">
  @foreach ($produtos as $produto)
    <h3>{!! $produto->nomeFormatada() !!}</h3>
    <p><strong>Marca:</strong> {!! $produto->marcaFormatada() !!}</p>
    <p><strong>Fornecedor:</strong> {{ $produto->nomeFantasia }}</p>
    <p><strong>Preço:</strong> {{ $produto->preco }}</p>
    <p><strong>Estoque:</strong> {{ $produto->estoque }}</p>
    <p><strong>Descrição:</strong></p>
    <p>{!! $produto->descricaoFormatada() !!}</p>
    <hr>
  @endforeach
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>
