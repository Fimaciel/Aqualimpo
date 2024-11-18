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
      schema::create("clientes", function (Blueprint $table)
      {
        $table->id();
        $table->string('nome', 222);
        $table->string('sobrenome', 222);
        $table->string('contato');
        $table->string('email');
        $table->date('data_nascimento')->nullable(); //pode ser nulo
        $table->string('genero',1)->nullable();//pode ser nulo
        $table->string('logradouro');
        $table->string('cpf',14);
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
      Schema::dropIfExists('clientes');
    }
};
