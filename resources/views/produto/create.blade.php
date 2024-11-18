<x-layout title="Cadastrar Produto">
  <section class="m-3">
    <div class="card m-4">
      <div class="card-title m-3">
        <h1 class="titulo p-3">Cadastrar Produto</h1>
      </div>
      <div class="card-body">
        <form action="{{ route('produtos.salvar') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="nome" class="form-label">Nome do Produto:</label>
                <input required type="text" maxlength="130"  id="nome" name="nome" class="form-control" placeholder="Digite o nome do produto">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="marca" class="form-label">Marca:</label>
                <input required type="text" maxlength="130"  id="marca" name="marca" class="form-control" placeholder="Digite a marca">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="fornecedor">Fornecedor:</label>
                <select required class="form-control" name="fornecedor_id" id="fornecedor">
                  <option value="" selected disabled>Selecione um fornecedor</option>
                  @foreach ($fornecedores as $fornecedor)
                    <option value="{{ $fornecedor->id }}">
                      {{ $fornecedor->nomefantasia }}
                    </option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="descricao" class="form-label">Descrição do Produto:</label>
                <textarea id="descricao" name="descricao" rows="4" class="no-edit form-control" placeholder="Digite a descrição do produto"></textarea>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="preco" class="form-label">Preço:</label>
                <input required onkeyup="$(this).mask('##,00', {reverse: true})" maxlength="13" type="text" id="preco" name="preco" class="form-control" placeholder="Digite o preço">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="estoque" class="form-label">Quantidade em Estoque:</label>
                <input onkeyup="$(this).mask('##', {reverse: true})" maxlength="5" type="text" id="estoque" name="estoque" class="form-control" placeholder="Digite a quantidade em estoque" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label for="imagem" class="form-label">Escolher Imagem do Produto:</label>
              <div class="custom-file">
                <input type="file" id="imagem" name="imagem">
              </div>
            </div>
            <div class="col-md-8 d-flex justify-content-end align-items-center">
              <button type="submit" class="pos-r bg-orange btn btn-dark border">Cadastrar</button>
              <a href="{{ route('index') }}" class="ml-2 btn btn-secondary">Cancelar</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
</x-layout>
