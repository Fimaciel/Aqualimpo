<?php

namespace App\Http\Controllers;

use App\Models\LinhaVenda;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Venda;
use App\Models\Produto;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Session;
use Psy\Readline\Libedit;


class VendaController extends Controller
{
  public function index()
  {
    $vendas = Venda::with('cliente')->get();
    return view('vendas.busca')->with('vendas',$vendas);
  }

  public function create()
  {
    $produtos = Produto::all();
    return view('vendas.create', compact('produtos'))->with('clientes', Cliente::all());
  }


  public function store(Request $request)
  {
    //dd($request->input());

    $venda = new Venda();
    $venda->cliente_id = $request->input('cliente_id');
    $venda->preco_total = 0;
    $venda->save();

    foreach ($request->input('produto') as $i => $id) {
      $produto = Produto::find($id);
      $quantidade = $request->input('quantidade')[$i];

      if (!$produto || $quantidade > $produto->estoque) {
        return redirect()->back()->with('error', 'A quantidade solicitada não está disponível em estoque.');
      }

      $venda->linhas()->create([
        'produto_id' => $id,
        'quantidade' => $quantidade,
        'preco_unitario' => $produto->preco,
        'preco_total' => $quantidade * $produto->preco,
      ]);

      $produto->estoque -= $quantidade;
      $produto->save();
    }

    $venda->preco_total = $venda->linhas()->get()->sum('preco_total');
    $venda->save();

    return redirect()->route('buscarVenda')->with('success', 'Venda concluída com sucesso.');
  }

  public function edit($id)
  {
    $venda = Venda::find($id);
    $clientes = Cliente::all();
    $produtos = Produto::all();
    $linhasProdutos = LinhaVenda::where('venda_id', $id)->get();
    return view('vendas.edit', compact('venda', 'clientes', 'produtos','linhasProdutos'));
  }


  public function update(Venda $venda, Request $request)
  {
    // Atualizar os campos da venda, se necessário
    $venda->cliente_id = $request->input('cliente_id');
    $venda->save();

    // Excluir todas as linhas de venda existentes para esta venda
    $venda->linhas()->delete();

    // Criar novas linhas de venda com base nos dados do reques
    $produtos = $request->input('produto');

    if($produtos){
      foreach ($request->input('produto') as $i => $id) {
        $produto = Produto::find($id);
        $quantidade = $request->input('quantidade')[$i];

        if (!$produto || $quantidade > $produto->estoque) {
          return redirect()->back()->with('error', 'A quantidade solicitada não está disponível em estoque.');
        }

        $venda->linhas()->create([
          'produto_id' => $id,
          'quantidade' => $quantidade,
          'preco_unitario' => $produto->preco,
          'preco_total' => $quantidade * $produto->preco,
        ]);

        $produto->estoque -= $quantidade;
        $produto->save();
      }
    } else {
      $venda->linhas()->delete();
    }

    // Recalcular o preço total da venda
    $venda->preco_total = $venda->linhas()->sum('preco_total');
    $venda->save();

    return redirect()->route('buscarVenda');
  }

  public function destroy($id)
  {
    LinhaVenda::where('venda_id', $id)->delete();

    Venda::find($id)->delete();

    return redirect()->route('buscarVenda');
  }
  public function gerarRelatorio()
  {
    $vendas = Venda::all();
    $produtos = Produto::all();

    $pdf = Pdf::loadView('vendas.show', compact('vendas','produtos'));

    return $pdf->download('relatorio_vendas.pdf');
  }
  public function gerarRelatorioLinha($id)
  {
    $clientes = Cliente::all();
    $produtos = Produto::all();
    $vendas = Venda::all();
    $linhasProdutos = LinhaVenda::where('venda_id', $id)->get();

    $pdf = Pdf::loadView('vendas.showlinha', compact('linhasProdutos', 'clientes', 'produtos','vendas'));

    return $pdf->download('relatorio_vendasLinha.pdf');
  }

}
