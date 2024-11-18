<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
  public function index()
  {
    $clientes = Cliente::all();
    return view('cliente.index') -> with('clientes', $clientes);
  }

  public function create()
  {
    return view('cliente.create');
  }

  public  function store(Request $request)
  {

    Cliente::create($request->input());

    return redirect()->route("buscarcliente");
  }

  public function edit(Cliente $cliente)
  {
    return view('cliente.edit',['cliente' => $cliente]);
  }

  public function update(Cliente $cliente, Request $request)
  {
    $data = $request->all();
    $cliente->update($data);

    return redirect()->route('buscarcliente');
  }

  public function destroy(Cliente $cliente)
  {
    $cliente->delete();
    return redirect()->route('buscarcliente');
  }
}
