<x-layout title="Cadastrar Fornecedores">
  <section class="m-3">
    <br>
    <div class="card m-4">
      <div>
        <div class="card-title m-3">
          <h1 class="titulo p-3">
            Cadastrar Fornecedor
          </h1>
        </div>
      </div>
      <div class="card-body">
        <form action="{{ route('fornecedor.salvar') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="razaosocial" class="form-label">Razão Social:</label>
                <input required type="text" id="razaosocial" name="razaosocial" class="form-control" placeholder="Digite a Razão Social">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="nomefantasia" class="form-label">Nome Fantasia:</label>
                <input required type="text" id="nomefantasia" name="nomefantasia" class="form-control" placeholder="Digite o Nome Fantasia">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="cnpj" class="form-label">CNPJ:</label>
                <input required type="text" id="cnpj" name="cnpj" class="form-control" placeholder="Digite o CNPJ"  maxlength="18">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="contato" class="form-label">Contato:</label>
                <input required type="tel" id="contato" name="contato" class="form-control" placeholder="Digite o telefone" maxlength="15">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="email" class="form-label">E-mail:</label>
                <input required type="text" id="email" name="email" class="form-control" placeholder="Digite o E-mail">
              </div>
            </div>
          </div>
          <br>
          <hr />
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="cep" class="form-label">CEP:</label>
                <input required type="tel" id="cep" name="cep" class="form-control" placeholder="Digite o CEP" maxlength="8">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="numero" class="form-label">Número:</label>
                <input required type="text" id="numero" name="numero" class="form-control" placeholder="Digite o Número">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="logradouro" class="form-label">Logradouro:</label>
                <input required type="text" id="logradouro" name="logradouro" class="form-control" placeholder="Digite o Logradouro">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="cidade" class="form-label">Cidade:</label>
                <input required type="text" id="cidade" name="cidade" class="form-control" placeholder="Digite a Cidade">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="bairro" class="form-label">Bairro:</label>
                <input required type="text" id="bairro" name="bairro" class="form-control" placeholder="Digite o Bairro">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="estado" class="form-label">Estado:</label>
                <input required type="text" id="estado" name="estado" class="form-control" placeholder="Digite o Estado">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 d-flex justify-content-end">
              <br>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
              <button type="submit" class="m-3 pos-r bg-orange btn btn-dark border border-warning">Cadastrar Fornecedor</button>
              <a href="{{ route('index') }}" class="m-3 btn btn-secondary">Cancelar</a>

            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
</x-layout>

