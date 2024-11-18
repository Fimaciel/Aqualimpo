<x-layout title="Editar Fornecedores">
  <section class="m-3">
    <br>
    <div class="card m-4">
      <h1 class="titulo p-3">
        Editar Fornecedor
      </h1>
      <div class="card-body">
        <form action="{{ route('fornecedor.update',['fornecedor' => $fornecedor]) }}" method="POST"
              enctype="multipart/form-data">
          @method('PUT')
          @csrf
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="nome" class="form-label">Razão Social:</label>
                <input required type="text" id="razaosocial" name="razaosocial" class="form-control"
                       value="{{$fornecedor->razaosocial}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="marca" class="form-label">Nome Fantasia:</label>
                <input required type="text" id="nomefantasia" name="nomefantasia" class="form-control"
                       value="{{$fornecedor->nomefantasia}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="marca" class="form-label">CNPJ:</label>
                <input required type="text" id="cnpj" name="cnpj" class="form-control" value="{{$fornecedor->cnpj}}">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="descricao" class="form-label">Contato:</label>
                <input required id="contato" name="contato" maxlength="15" class="form-control"
                       value="{{$fornecedor->contato}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="preco" class="form-label">email:</label>
                <input required type="text" id="email" name="email" class="form-control" value="{{$fornecedor->email}}">
              </div>
            </div>
          </div>
          <br>
          <hr class="border-bottom">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="cep" class="form-label">CEP:</label>
                <input required type="text" id="cep" name="cep" class="form-control" value="{{$fornecedor->cep}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="numero" class="form-label">Número:</label>
                <input required type="text" id="numero" name="numero" class="form-control"
                       value="{{$fornecedor->numero}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="logradouro" class="form-label">Logradouro:</label>
                <input required type="text" id="logradouro" name="logradouro" class="form-control"
                       value="{{$fornecedor->logradouro}}">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="cidade" class="form-label">Cidade:</label>
                <input required type="text" id="cidade" name="cidade" class="form-control"
                       value="{{$fornecedor->cidade}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="bairro" class="form-label">Bairro:</label>
                <input required type="text" id="bairro" name="bairro" class="form-control"
                       value="{{$fornecedor->bairro}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="estado" class="form-label">Estado:</label>
                <input required type="text" id="estado" name="estado" class="form-control"
                       value="{{$fornecedor->estado}}">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 d-flex justify-content-end">
              <br>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
              <button type="submit" class="pos-r bg-orange btn btn-dark border">Atualizar</button>
              <a href="{{ route('index') }}" class="ml-2 btn btn-secondary">Cancelar</a>
            </div>
          </div>
        </form>
      </div>
    </div>

  </section>
</x-layout>

