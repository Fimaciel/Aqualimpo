<x-layout title="Editar Produto">
  <section class="m-3">
    <br>
    <h1 class="titulo">
      Editar Produtos
    </h1>
    <div class="card">
      <div class="card-body">
        <form action="{{ route('produto.update',['produto' => $produto]) }}" method="POST"
              enctype="multipart/form-data">
          @method('PUT')
          @csrf
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="nome" class="form-label">Nome do Produto:</label>
                <input type="text" id="nome" name="nome" class="form-control" value="{{$produto->nome}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="marca" class="form-label">Marca:</label>
                <input type="text" id="marca" name="marca" class="form-control" value="{{$produto->marca}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="fornecedor">Fornecedor</label>
                <select required class="form-control" name="fornecedor_id" id="fornecedor">
                  @foreach ($fornecedores as $fornecedor)
                    <option
                      value="{{ $fornecedor->id }}" {{ $fornecedor->id == $produto->fornecedor_id ? 'selected' : '' }}>
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
                <textarea id="descricao" name="descricao" rows="4"
                          class="no-edit form-control">{{$produto->descricao}}</textarea>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="preco" class="form-label">Preço:</label>
                <input onkeyup="$(this).mask('##,00', {reverse: true})" maxlength="15" type="text" id="preco"
                       name="preco" class="form-control" value="{{$produto->preco}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="estoque" class="form-label">Quantidade em Estoque:</label>
                <input onkeyup="$(this).mask('##', {reverse: true})" maxlength="5" type="text" id="estoque"
                       name="estoque" class="form-control" value="{{$produto->estoque}}">
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
