<x-layout title="Vender">
  <div class="container mt-4">
    <h1 class="titulo">Realizar Venda</h1>

    <form action="{{ route('venda.salvar') }}" method="POST" onsubmit="return validarFormulario()">
      @csrf
      <!-- Selecionar Cliente -->
      <div class="form-group">
        <label for="cliente">Cliente:</label>
        <select required class="form-control" id="cliente" name="cliente_id">
          <option  value="" disabled selected>Selecione um Cliente</option>
          @foreach ($clientes as $cliente)
            <option  value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
          @endforeach
        </select>
      </div>

      <!-- Selecionar Produtos -->
       <div class="form-group">
         <label for="produto">Produto:</label>
         <select class="form-control" id="produto">
           <option value="" disabled selected>Selecione um Produto</option>
           @foreach($produtos as $produto)
             <option value="{{ $produto->id }}" data-preco="{{$produto->preco}}" data-estoque="{{$produto->estoque}}">{{ $produto->nome }}</option>
           @endforeach
         </select>
       </div>

      <!-- Informar Quantidade -->
      <div class="form-group">
        <label for="quantidade">Quantidade:</label>
        <input min="1" type="number" class="form-control" id="quantidade">
      </div>

      <button type="button" class="btn bg-orange btn btn-dark border" id="adicionarProduto">Adicionar Produto</button>

      <h2 class="pb-2 pt-2">Itens da Venda</h2>
      <table required class="table table-bordered">
        <thead>
        <tr>
          <th>Produto</th>
          <th>Quantidade</th>
          <th>Preço Unitário</th>
          <th>Preço Total</th>
          <th>Ação</th>
        </tr>
        </thead>
        <tbody id="tabelaItens">
        </tbody>
        <tfoot>
        <tr>
          <td colspan="4">Preço Total:</td>
          <td id="precoTotal">0.00</td>
        </tr>
        </tfoot>
      </table>

      <button type="submit" class="btn btn-primary mt-3">Finalizar Venda</button>
    </form>
  </div>
  <script>
    // Variável para armazenar os itens da venda
    const itensVenda = [];

      function validarFormulario() {

        if (itensVenda.length === 0) {
          alert("Você deve adicionar pelo menos um item à venda.");
          return false;
        }
            return true;
      }

    // Adicionar Produto à Venda
    document.getElementById("adicionarProduto").addEventListener("click", function () {
      const produtoSelecionado = document.getElementById("produto");
      const quantidade = document.getElementById("quantidade").value;
      const clienteSelecionado = document.getElementById("cliente");
      const estoqueDisponivel = parseInt(produtoSelecionado.options[produtoSelecionado.selectedIndex].getAttribute('data-estoque'));

      if (produtoSelecionado.value && quantidade > 0 && clienteSelecionado.value) {
        const id = produtoSelecionado.options[produtoSelecionado.selectedIndex].value;
        const produto = produtoSelecionado.options[produtoSelecionado.selectedIndex].text;
        const precoUnitario = parseFloat(produtoSelecionado.options[produtoSelecionado.selectedIndex].getAttribute('data-preco'));
        const precoTotal = quantidade * precoUnitario;

        // Verificar se a quantidade solicitada não excede o estoque disponível
        if (quantidade <= estoqueDisponivel) {
          // Adicionar o item à lista de itens da venda
          itensVenda.push({
            id: id,
            produto: produto,
            quantidade: quantidade,
            precoUnitario: precoUnitario,
            precoTotal: precoTotal,
          });


          // Atualizar a tabela de itens da venda
          atualizarTabelaItens();

          // Limpar campos
          produtoSelecionado.selectedIndex = 0;
          document.getElementById("quantidade").value = "";
        } else {
          alert("Quantidade solicitada excede o estoque disponível.");
        }
      }
    });

    // Atualizar a tabela de itens da venda
    function atualizarTabelaItens() {
      const tabelaItens = document.getElementById("tabelaItens");
      tabelaItens.innerHTML = "";
      let quantidadeTotal = 0;
      let precoTotal = 0.00;

      itensVenda.forEach((item, index) => {
        const row = tabelaItens.insertRow();
        row.innerHTML = `
        <td>
        <input type="hidden" name="produto[]" value="${item.id}"/>
        <input type="hidden" name="quantidade[]" value="${item.quantidade}"/>
             ${item.produto}
        </td>
        <td>${item.quantidade}</td>
        <td>${item.precoUnitario}</td>
        <td>${item.precoTotal}</td>
        <td>
          <button type="button" class="btn btn-danger" onclick="excluirItem(${index})">Excluir</button>
        </td>
      `;

        // Atualizar os totais
        // quantidadeTotal += item.quantidade;
        precoTotal += item.precoTotal;
      });

      // Exibir os totais na tabela
      // document.getElementById("quantidadeTotal").textContent = quantidadeTotal;
      document.getElementById("precoTotal").textContent = precoTotal.toFixed(2);
    }


    function excluirItem(index) {
      if (confirm("Tem certeza de que deseja excluir este item?")) {
        itensVenda.splice(index, 1);
        atualizarTabelaItens();
      }
    }
  </script>
</x-layout>


