<!DOCTYPE html>
<html>
<head>
  <title>Relatório de Vendas</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css">
</head>
<body>
<div class="container text-center">
  <h1 class="mt-5">Relatório de Vendas Gerais</h1>
  <p>Este é o relatório de todas as vendas registradas no sistema.</p>
</div>

<div class="container">
  <table class="table table-bordered" id="fornecedorTabela">
    <thead>
    <tr class="titulo">
      <th>ID</th>
      <th>Valor Total</th>
      <th>Cliente</th>
      <th>Data</th>
    </tr>
    </thead>
    <tbody>
    @foreach($vendas as $venda)
      <tr>
        <td>{{$venda->id}}</td>
        <td>{{$venda->preco_total}}</td>
        <td>
          @if ($venda->cliente)
            {{ $venda->cliente->nome }}
          @else
            Sem cliente associado
          @endif
        </td>
        <td>{{$venda->created_at?->format('d/m/Y')}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>
