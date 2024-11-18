<x-layout title="Buscar Produto">
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
        <a href="{{ route('produtos') }}" class="btn btn-custom"><i class="bi bi-plus-lg"></i></a>
        <a href="{{ route('produto.relatorio') }}" class="btn btn-custom"><i class="bi bi-filetype-pdf"></i></a>
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
              <th>Nome</th>
              <th>Marca</th>
              <th>Fornecedor</th>
              <th>preço</th>
              <th>estoque</th>
              <th>descricao</th>
              <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($produtos as $produto)
              <tr>
                <td>{{$produto->id}}</td>
                <td style="word-break: break-all; width: 155px;">{{$produto->nome}}</td>
                <td style="word-break: break-all; width: 150px;">{{$produto->marca}}</td>
                <td style="word-break: break-all; width: 150px;">
                  @if ($produto->fornecedor)
                    {{ $produto->fornecedor->nomefantasia }}
                  @else
                    Sem fornecedor associado
                  @endif
                </td>
                <td>{{$produto->preco}}</td>
                <td>{{$produto->estoque}}</td>
                <td style="word-break: break-all; width: 250px;">{{$produto->descricao}}</td>
                <td>
                  <div class="d-flex">
                    <a href="{{ route('produto.edit', ['produto' => $produto]) }}" class="mr-2">
                      <img src="{{ asset('imagem/icon/iconedit.svg') }}" alt="Editar">
                    </a>
                    <form method="POST" action="{{ route('produto.destroy', ['produto' => $produto]) }}">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-link p-0 border-0 bg-transparent">
                        <img src="{{ asset('imagem/icon/icondelete.svg') }}" alt="Deletar">
                      </button>
                    </form>
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

