<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use App\Models\Produto;
use Illuminate\Http\Request;
use App\Models\LinhaVenda;
use Barryvdh\DomPDF\Facade\Pdf;


class ProdutosController extends Controller
{
  public function index()
  {
    $produtos = Produto::all();
    return view('produto.index')->with('produtos', $produtos);
  }

  public function informar()
  {
    $produtos = Produto::all();
    return view('produto.buscar')->with('produtos', $produtos);
  }

  public function create()
  {
    return view('produto.create')->with('fornecedores', Fornecedor::all());
  }

  public function store(Request $request)
  {
    if ($request->hasFile('imagem')) {
      $caminhoImagem = $request->file('imagem')->store('uploads');
    } else {
      $caminhoImagem = null;
    }

    $requestData = $request->collect()->put('imagem', $caminhoImagem)->toArray();
    $requestData['preco'] = str_replace(',', '.', $requestData['preco']);

    Produto::create($requestData);

    return redirect()->route('index');
  }
  public function search(Request $request)
  {
    $searchTerm = $request->input('search');

    $resultados = Fornecedor::where('nome', 'LIKE', '%' . $searchTerm . '%')->get();

    return view('fornecedores.lista', ['resultados' => $resultados]);
  }
  public function edit(Produto $produto)
  {
    return view('produto.edit', ['produto' => $produto])->with('fornecedores', Fornecedor::all());
  }

  public function update(Produto $produto, Request $request){
    $data = $request->all();

    $data['preco'] = str_replace(',', '.', $data['preco']);

    $produto->update($data);

    return redirect()->route('buscarproduto')->with('Sucesso', 'Atualização feita com sucesso');
  }

  public function destroy(Produto $produto)
  {
    $referencias = LinhaVenda::where('produto_id', $produto->id)->get();

    foreach ($referencias as $referencia) {
      $referencia->delete();
    }

    $produto->delete();

    return redirect()->route('buscarproduto');
  }
  public function gerarRelatorio()
  {
    $produtos = Produto::all();

    $pdf = Pdf::loadView('produto.show', compact('produtos'));

    return $pdf->download('relatorio_vendas.pdf');
  }

}
