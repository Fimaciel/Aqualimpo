<x-layout title="Buscar Cliente">
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
        <a href="{{ route('cadastrarcliente') }}" class="btn btn-custom"><i class="bi bi-plus-lg"></i></a>
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
              <th>Sobrenome</th>
              <th>Contato</th>
              <th>E-mail</th>
              <th>Data de Nascimento</th>
              <th>CPF</th>
              <th>CEP</th>
              <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($clientes as $cliente)
              <tr>
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->nome}}</td>
                <td>{{$cliente->sobrenome}}</td>
                <td>{{$cliente->contato}}</td>
                <td>{{$cliente->email}}</td>
                <td>{{$cliente->data_nascimento?->format('d/m/Y')}}</td>
                <td>{{$cliente->cpf}}</td>
                <td>{{$cliente->cep}}</td>
                <td>
                  <div class="d-flex">
                    <a href="{{ route('cliente.edit', ['cliente' => $cliente]) }}" class="mr-2">
                      <img src="{{ asset('imagem/icon/iconedit.svg') }}" alt="Editar">
                    </a>
                    <form method="POST" action="{{ route('cliente.destroy', ['cliente' => $cliente]) }}">
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
