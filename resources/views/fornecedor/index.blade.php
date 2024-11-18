<x-layout title="Buscar Fornecedores">
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
        <a href="{{ route('cadastrarfornecedor') }}" class="btn btn-custom"><i class="bi bi-plus-lg"></i></a>
      </div>
    </div>
  </div>
  <br>
  <div class="m-5 m-5 ">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="table-responsive">
          <table class="table table-bordered" id="fornecedorTabela">
            <thead>
            <tr class="titulo">
              <th>ID</th>
              <th>Razão Social</th>
              <th>Nome Fantasia</th>
              <th>CNPJ</th>
              <th>Contato</th>
              <th>Email</th>
              <th>CEP</th>
              <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($fornecedores as $fornecedor)
              <tr>
                <td>{{$fornecedor->id}}</td>
                <td style="word-break: break-all; width: 150px;">{{$fornecedor->razaosocial}}</td>
                <td style="word-break: break-all; width: 150px;">{{$fornecedor->nomefantasia}}</td>
                <td>{{$fornecedor->cnpj}}</td>
                <td>{{$fornecedor->contato}}</td>
                <td style="word-break: break-all; width: 150px;">{{$fornecedor->email}}</td>
                <td>{{$fornecedor->cep}}</td>
                <td>
                  <div class="d-flex">
                    <a href="{{ route('fornecedor.edit', ['fornecedor' => $fornecedor]) }}" class="mr-2">
                      <img src="{{ asset('imagem/icon/iconedit.svg') }}" alt="Editar">
                    </a>
                    <form method="POST" action="{{ route('fornecedor.destroy', ['fornecedor' => $fornecedor]) }}">
                      @csrf
                      @method('delete')
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


