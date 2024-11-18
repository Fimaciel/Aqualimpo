<x-layout title="Buscar Venda">
  <br>
  <div class="container mt-3">
    <div class="d-flex justify-content-between align-items-center">
      <form id="formPesquisa" method="GET" class="form-inline my-3 my-lg-0 ml-3 mr-3">
        <div class="input-group">
          <div class="input-group-prepend">
      <span class="input-group-text">
        <img src="{{ asset('imagem/icon/procura.svg')}}" alt="Ícone de Pesquisa">
      </span>
          </div>
          <input type="text" id="searchInput" class="form-control" placeholder="Pesquisar">
        </div>
      </form>

      <div class="ml-3">
        <a href="{{ route('vendas') }}" class="btn btn-custom"><i class="bi bi-plus-lg"></i></a>
        <a href="{{route('venda.relatorio')}}" class="btn btn-custom"><i class="bi bi-filetype-pdf"></i></a>
      </div>
    </div>
  </div>
  <br>
  <div class="mt-5 mb-5">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="table-responsive">
          <table class="table table-bordered" id="fornecedorTabela">
            <thead>
            <tr class="titulo">
              <th>ID</th>
              <th>Valor Total</th>
              <th>Cliente</th>
              <th>Data</th>
              <th></th>
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
                <td>
                  <div class="d-flex">
                    <a href="{{ route('venda.edit', ['venda' => $venda]) }}" class="mr-2">
                      <img src="{{ asset('imagem/icon/iconedit.svg') }}" alt="Editar">
                    </a>
                    <form method="POST" action="{{ route('venda.destroy', ['venda' => $venda]) }}">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-link p-0 border-0 bg-transparent">
                        <img src="{{ asset('imagem/icon/icondelete.svg') }}" alt="Deletar">
                      </button>
                    </form>
                    <a href="{{ route('venda.relatoriolinha', ['venda' => $venda->id]) }}" class="m-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="black"
                           class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z"/>
                      </svg>
                    </a>
                  </div>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-layout>
