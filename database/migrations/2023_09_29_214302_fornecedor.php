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
      Schema::create("fornecedor", function(Blueprint $table){
        $table->id();
        $table->string('razaosocial', 222);
        $table->string('nomefantasia',222);
        $table->string('cnpj', 222);
        $table->string('contato');
        $table->string('email');
        $table->string('logradouro');
        $table->string('cep');
        $table->string('numero');
        $table->string('bairro');
        $table->string('cidade');
        $table->string('estado');
        $table->timestamps();

      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::dropIfExists('fornecedor');
    }
};
