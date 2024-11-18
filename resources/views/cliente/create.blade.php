<x-layout title="Cadastrar Cliente">
  <section class="section">
    <br>
    <div class="card m-4">
      <div>
        <div class="card-title m-3">
          <h1 class="titulo p-3">
            Cadastrar Cliente
          </h1>
        </div>
      </div>
      <div class="card-body">
        <div class="mt-3">
          <div class="justify-content-center">
            <div class="m-4">
              <form action="{{ route('cadastrarcliente.salvar') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="nome">Nome:</label>
                      <input type="text" id="nome" name="nome" class="form-control"
                             placeholder="Digite o nome do cliente"
                             required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="nome">Sobrenome:</label>
                      <input type="text" id="sobrenome" name="sobrenome" class="form-control"
                             placeholder="Digite o Sobrenome do cliente" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="telefone">Contato:</label>
                      <input required type="tel" id="contato" name="contato" class="form-control"
                             placeholder="Digite o telefone" maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="email">E-mail:</label>
                      <input type="email" id="email" name="email" class="form-control"
                             placeholder="Digite o endereço de e-mail" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="data_nascimento">Data de Nascimento:</label>
                      <input type="date" id="data_nascimento" name="data_nascimento" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="genero">Gênero:</label>
                      <select id="genero" name="genero" class="form-control">
                        <option></option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                        <option value="O">Outro</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="documento_identificacao">CPF:</label>
                      <input type="text" id="cpf" name="cpf"
                             class="form-control" maxlength="14"
                             placeholder="Digite o número do documento" required>
                    </div>
                  </div>
                </div>
                <hr/>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="cep" class="form-label">CEP:</label>
                      <input required type="tel" id="cep" name="cep" class="form-control" placeholder="Digite o CEP"
                             maxlength="8">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="numero" class="form-label">Número:</label>
                      <input required type="text" id="numero" name="numero" class="form-control"
                             placeholder="Digite o Número">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="logradouro" class="form-label">Logradouro:</label>
                      <input required type="text" id="logradouro" name="logradouro" class="form-control"
                             placeholder="Digite o Logradouro">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="cidade" class="form-label">Cidade:</label>
                      <input required type="text" id="cidade" name="cidade" class="form-control"
                             placeholder="Digite a Cidade">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="bairro" class="form-label">Bairro:</label>
                      <input required type="text" id="bairro" name="bairro" class="form-control"
                             placeholder="Digite o Bairro">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="estado" class="form-label">Estado:</label>
                      <input required type="text" id="estado" name="estado" class="form-control"
                             placeholder="Digite o Estado">
                    </div>
                  </div>
                </div>
                <button type="submit" class="pos-r bg-orange btn btn-dark border border-warning">Cadastrar Cliente
                </button>
                <a href="{{ route('index') }}" class="ml-2 btn btn-secondary">Cancelar</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-layout>

