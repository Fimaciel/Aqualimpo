<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
      Schema::create('vendas', function (Blueprint $table){
        $table->id();
        $table->float('preco_total');
        $table->foreignId('cliente_id')->constrained('clientes');
        $table->timestamps();
      });

      Schema::create("linha_venda", function (Blueprint $table){
        $table->id();
        $table->foreignId('produto_id')->constrained('produtos');
        $table->foreignId('venda_id')->constrained('vendas');
        $table->integer('quantidade');
        $table->float('preco_unitario');
        $table->float('preco_total');
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::dropIfExists('linha_venda');
      Schema::dropIfExists('vendas');
    }
};
