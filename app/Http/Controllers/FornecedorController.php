<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use App\Models\LinhaVenda;
use App\Models\Produto;
use Illuminate\Http\Request;
class FornecedorController extends Controller
{
  public function index()
  {
    $fornecedores = Fornecedor::all();
    return view('fornecedor.index')->with('fornecedores', $fornecedores);
  }
  public function create()
  {
    return view('fornecedor.create');
  }
  public function store(Request $request)
  {
    Fornecedor::create($request->input());

    return redirect()->route('index');
  }

  public function edit(Fornecedor $fornecedor)
  {
      return view('fornecedor.edit', ['fornecedor' => $fornecedor]);
  }
  public function update(Fornecedor $fornecedor, Request $request){
    $data = $request->all();
    $fornecedor->update($data);

    return redirect()->route('buscarFornecedor')->with('Sucesso', 'Atualização feita com sucesso');
  }

}
