<!DOCTYPE html>
<html>
<head>
  <title>Relatório de Vendas de Linha</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css">
</head>
<body>
<div class="container text-center">
  <h1 class="mt-5">Relatório de Vendas de Linha</h1>
  <p>Este é o relatório que informa todos os produtos adquiridos pelo cliente:</p>
  @foreach ($linhasProdutos as $linha)
  @endforeach
  <p>{{ $linha->venda->cliente->nome}}</p>
</div>

<div class="container">
  <table class="table">
    <thead>
    <tr>
      <th>ID</th>
      <th>Produto</th>
      <th>Quantidade</th>
      <th>Preço Unitário</th>
      <th>Total</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($linhasProdutos as $linhaProdutos)
      <tr>
        <td>{{ $linhaProdutos->id }}</td>
        <td>{{ $linhaProdutos->produto->nome }}</td>
        <td>{{ $linhaProdutos->quantidade }}</td>
        <td>{{ $linhaProdutos->preco_unitario }}</td>
        <td>{{ $linhaProdutos->preco_total }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>

