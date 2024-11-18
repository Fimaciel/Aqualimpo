<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\FornecedorController;
use \App\Http\Controllers\ClienteController;
use  App\Http\Controllers\VendaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// links para Produtos
Route::get('/', [ProdutosController::class, 'index'])->name('index');
Route::get('/create', [ProdutosController::class, 'create'])->name("produtos");
Route::post('/produtos', [ProdutosController::class, 'store'])->name('produtos.salvar');
Route::get('/buscarProduto',[ProdutosController::class,'informar'])->name('buscarproduto');
Route::get("/produto/{produto}/edit",[ProdutosController::class, 'edit'])->name('produto.edit');
Route::put("/produto/{produto}/update",[ProdutosController::class, 'update'])->name('produto.update');
Route::delete("/produto/{produto}/destroy",[ProdutosController::class, 'destroy'])->name('produto.destroy');
Route::get('/produtosrelatorios', [ProdutosController::class, 'gerarRelatorio'])->name('produto.relatorio');




// links para Fornecedor
Route::get('/buscarFornecedor',[FornecedorController::class,'index'])->name('buscarFornecedor');
Route::get('/cadastrarfornecedor',[FornecedorController::class,'create'])->name('cadastrarfornecedor');
Route::post('/cadastrarfornecedores', [FornecedorController::class, 'store'])->name('fornecedor.salvar');
Route::get('/fornecedor/{fornecedor}/edit', [FornecedorController::class, 'edit'])->name('fornecedor.edit');
Route::put('/fornecedor/{fornecedor}/update', [FornecedorController::class, 'update'])->name('fornecedor.update');
Route::delete('/fornecedor/{fornecedor}/destroy', [FornecedorController::class, 'destroy'])->name('fornecedor.destroy');

// links para Cliente
Route::get('/buscarCliente',[ClienteController::class,'index'])->name('buscarcliente');
Route::get('/cadastrarCliente', [ClienteController::class,'create']) -> name('cadastrarcliente');
Route::post('/cadastrarclientes', [ClienteController::class, 'store'])->name('cadastrarcliente.salvar');
Route::get("/cliente/{cliente}/edit",[ClienteController::class, 'edit'])->name('cliente.edit');
Route::put("/cliente/{cliente}/update",[ClienteController::class, 'update'])->name('cliente.update');
Route::delete("/cliente/{cliente}/destroy",[ClienteController::class, 'destroy'])->name('cliente.destroy');

//links para venda
Route::get('/buscaVenda',[VendaController::class,'index'])->name('buscarVenda');
Route::get('/vendacreate', [VendaController::class,'create'])->name('vendas');
Route::post('/cadastrarvendas', [VendaController::class,'store'])->name('venda.salvar');
Route::get("/venda/{venda}/edit",[VendaController::class, 'edit'])->name('venda.edit');
Route::put("/venda/{venda}/update",[VendaController::class, 'update'])->name('venda.update');
Route::delete("/venda/{venda}/destroy",[VendaController::class, 'destroy'])->name('venda.destroy');
Route::get('/vendasrelatorio', [VendaController::class, 'gerarRelatorio'])->name('venda.relatorio');
Route::get('/linharelatorios/{venda}', [VendaController::class, 'gerarRelatorioLinha'])->name('venda.relatoriolinha');



